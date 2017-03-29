<?php

require_once "vendor/autoload.php";
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;
use MicrosoftAzure\Storage\Blob\Models\ListContainersResult;
use MicrosoftAzure\Storage\Common\ServicesBuilder;
use MicrosoftAzure\Storage\Common\ServiceException;
use MicrosoftAzure\Storage\Common\Internal\InvalidArgumentTypeException;

$account_name = "";
$account_key = "";

$connectionString = "DefaultEndpointsProtocol=https;AccountName=$account_name;AccountKey=$account_key";

$blobClient = ServicesBuilder::getInstance()->createBlobService($connectionString);

// container name = name of specialty

function uploadToAzure($container, $blob_path)
{
	global $blobClient;
	$content = fopen($blob_path, "r");
	$blob_name = $blob_path;
	try
	{
		$blobClient->createBlockBlob($container, $blob_name, $content);
	} catch (Exception $e)
	{
		$code = $e->getCode();
		$error_message = $e->getMessage();
		echo $code . ": " . $error_message.PHP_EOL;
	}

}
