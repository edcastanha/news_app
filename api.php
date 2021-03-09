<?php

require_once(__DIR__ . '/core/selectposts.php');

function main() {
    $method = $_SERVER["REQUEST_METHOD"];
    $id = $_GET['id'];
    switch ($method) {
        case 'POST':
            $response = create();
            break;
        case 'GET':
            if ($id) {
                $response = read($id);
            } else {
                $response = readAll();
            };
            break;
        case 'PUT':
            $response = update($id);
            break;
        case 'DELETE':
            $response = delete($id);
            break;
        default:
            $response = notFound();
            break;
    }

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header($response['status_code_header']);
    if ($response['body']) {
        echo $response['body'];
    }
}

function readAll()
{
    $db = new ListaPosts;
    $response = [];
    $result = $db->selectAll();
//    var_dump($result);
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = json_encode($result);
    return $response;
}

function read($id)
{
    $db = new ListaPosts;
    $result = $db->selectById($id);
    if (! $result) {
        return notFound();
    }
    $response['status_code_header'] = http_response_code(200);
    $response['body'] = json_encode($result);
    return $response;
}

function create()
{
    $db = new ListaPosts;
    $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    $result = $db->insert($input);
    if ( $result["success"] === true && $post = $db->selectById($result["id"]) ) {
        return [
            "status_code" => http_response_code(201),
            "body" => json_encode($post),
        ];
    } else {
        $msg = $result["error"] ? [ "message" => $result["error"] ] : "";
        return [
            "status_code" => http_response_code(400),
            "body" => json_encode($msg),
        ];
    }
}

function update($id)
{
    $db = new ListaPosts;
    $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    $result = $db->update($id, $input);
    if ( $result["success"] === true ) {
        return [
            "status_code" => http_response_code(200),
            "body" => json_encode( $result["post"] ),
        ];
    } else {
        $msg = $result["error"] ? [ "message" => $result["error"] ] : "";
        return [
            "status_code" => http_response_code(400),
            "body" => json_encode($msg),
        ];
    }
}

function delete($id)
{
    $db = new ListaPosts;
    $result = $db->selectById($id);
    if (! $result) {
        return notFound();
    }
    $db->deleteById($id);
    $response['status_code'] = http_response_code(204);
    $response['body'] = json_encode(['message' => 'Deleted' ]);
    return $response;
}

function notFound()
{
    $response['status_code'] = http_response_code(404);
    $response['body'] = json_encode(['message' => 'Not Found' ]);
    return $response;
}

main();