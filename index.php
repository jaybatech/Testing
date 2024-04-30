<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include Composer's autoloader
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Pool;
use GuzzleHttp\Exception\RequestException;


// Database connection parameters
$host = '127.0.0.1';
$dbname = 'applephem_tripay';
$username = 'applephem_tripay';
$password = 'yo188Ne6';
$appid    = '1bbmedisrvc2712252953qkdasxgyhm';
$app_secret = 'o5kbkifupleezt31698252952saqbpcwwxxsetee';
$num_transactions = 20;
$batch_size = 20;
try {
	// Connect to the database
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// Handle database connection error
	http_response_code(500);
	echo json_encode(["status" => "error", "message" => "Database connection failed: " . $e->getMessage()]);
	exit;
}
// Initialize Guzzle client
$client = new Client();

// Define function to handle transactions
function handleTransactions_1()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order1.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_2()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order2.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_3()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order3.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_4()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order4.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_5()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order5.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_6()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order6.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_7()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order7.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_8()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order8.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

function handleTransactions_9()
{
	global $client, $appid, $app_secret;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order9.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}


function handleTransactions_10()
{
	global $client, $appid, $app_secret, $num_transactions, $batch_size;
	$apiUrl = "https://pay.tripay.co.in/api/v1/in_order/order10.php";
	$responses = [];
	for ($j = 0; $j < $num_transactions; $j += $batch_size) {
		$batch_responses = [];
		$promises = [];
		for ($i = $j; $i < min($j + $batch_size, $num_transactions); $i++) {
			$refId = hexdec(uniqid());
			$postData = [
				'app_id' => $appid,
				'secret_key' => $app_secret,
				'ref_id' => strval($refId),
				'amount' => '1',
				'notes' => 'Test order',
				'customer_email' => 'tester@tripay.com',
				'customer_name' => 'TriPay_loop',
				'customer_phone' => '9876543210',
				'return_url' => '',
				'notify_url' => 'https://webhook.site/75bbdef7-d92a-473e-8827-f10e1e17e63e'
			];
			$request = new Request('POST', $apiUrl, ['Content-Type' => 'application/x-www-form-urlencoded'], http_build_query($postData));
			$promises[] = $client->sendAsync($request)->then(
				function ($response) use (&$batch_responses) {
					$batch_responses[] = $response->getBody()->getContents();
				},
				function (RequestException $exception) use (&$batch_responses) {
					// Handle exceptions (if any)
					$batch_responses[] = $exception->getMessage();
				}
			);
		}
		// Wait for all promises to be fulfilled
		GuzzleHttp\Promise\all($promises)->wait();
		// Merge batch responses into main responses array
		$responses = array_merge($responses, $batch_responses);
	}
	return $responses;
}

// Define multiple functions to handle requests
function function_1($requestData)
{
	// Process transactions
	$responses = handleTransactions_1();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_2($requestData)
{
	$responses = handleTransactions_2();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_3($requestData)
{
	$responses = handleTransactions_3();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_4($requestData)
{
	$responses = handleTransactions_4();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_5($requestData)
{
	$responses = handleTransactions_5();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_6($requestData)
{
	$responses = handleTransactions_6();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_7($requestData)
{
	$responses = handleTransactions_7();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_8($requestData)
{
	$responses = handleTransactions_8();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_9($requestData)
{
	$responses = handleTransactions_9();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

function function_10($requestData)
{
	$responses = handleTransactions_10();
	if (!empty($responses['error'])) {
		return json_encode(["status" => "ERROR", "message" => $responses['error']]);
	}
	return json_encode(["status" => "SUCCESS", "message" => "Transactions processed successfully"]);
}

// Define function to get the next available function from the queue
function getNextAvailableFunction($pdo)
{
	$stmt = $pdo->prepare('SELECT function_name FROM queue_table WHERE status = 0 ORDER BY id LIMIT 1');
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return ($result) ? $result['function_name'] : null;
}

// Process user requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get the next available function from the queue
	$nextFunction = getNextAvailableFunction($pdo);
	if ($nextFunction) {
		$functionName = $nextFunction;
		$pdo->prepare('UPDATE queue_table SET status = 1 WHERE function_name = ?')->execute([$functionName]);
		try {
			$result = call_user_func($functionName, $_POST);
            $resultArray = json_decode($result, true);
			if ($resultArray['status'] == 'SUCCESS') {
				$pdo->prepare('UPDATE queue_table SET status = 0 WHERE function_name = ?')->execute([$functionName]);
				echo json_encode(["status" => "success", "message" => "Your request has been processed successfully."]);
			} else {
				// Notify if an error occurred during processing
				echo json_encode(["status" => "error", "message" => "Error occurred while processing the request."]);
			}
		} catch (Exception $e) {
			echo json_encode(["status" => "error", "message" => "An error occurred: " . $e->getMessage()]);
		}
	} else {
		echo json_encode(["status" => "error", "message" => "No available functions to process."]);
	}
} else {
	http_response_code(405);
	echo json_encode(["status" => "error", "message" => "Method Not Allowed: Only POST requests are allowed."]);
}
