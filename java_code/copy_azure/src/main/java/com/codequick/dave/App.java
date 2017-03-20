package com.codequick.dave;


import java.io.File;
import java.io.FileInputStream;

import com.microsoft.azure.storage.*;
import com.microsoft.azure.storage.blob.*;



public class App {

	public static final String storageConnectionString =
	    "DefaultEndpointsProtocol=http;" +
	    "AccountName=;" +
	    "AccountKey=";

	
	public static void main(String args[]) throws Exception
	{
		
			
			String containerName = "mycontainer";
		    // Retrieve storage account from connection-string.
		    CloudStorageAccount storageAccount = CloudStorageAccount.parse(storageConnectionString);

		    // Create the blob client.
		    CloudBlobClient blobClient = storageAccount.createCloudBlobClient();

		    // Get a reference to a container.
		    // The container name must be lower case
		    CloudBlobContainer container = blobClient.getContainerReference(containerName);

		    // Create the container if it does not exist.
		    container.createIfNotExists();

		    // Define the path to a local file.
		    final String filePath = "target";

		    // Create or overwrite the "myimage.jpg" blob with contents from a local file.
		    CloudBlockBlob blob = container.getBlockBlobReference("target");
		    File source = new File(filePath);
		    blob.upload(new FileInputStream(source), source.length());

		    // Loop over blobs within the container and output the URI to each of them.
		    for (ListBlobItem blobItem : container.listBlobs()) 
		    {
		        System.out.println(blobItem.getUri());
		    }
		
	}

}
