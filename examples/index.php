<?php 
/**
 * IMPORTANT
 * 
 * This is a usage example only! it does not cover every possible use-case, 
 * nor should it be used as is in a production environment.
 */

	include('../src/jsonRPCClient.php');
	include('../src/Wallet.php');

	/**
	 *	Add the RPC settings from your wallet server (.conf file).
	 */
	$rpcProtocol	= 'http://';
	$rpcUser		= '';
	$rpcPassword	= '';
	$rpcHost		= '';
	$rpcPort		= '';

	$exampleAccount = 'Zv3jQct5Rdk5AvDpseJUGaDYoW5YRfhzHu';

	$coreRpcClient = new PHPRpcWalletWrapper\Wallet($rpcProtocol, $rpcUser, $rpcPassword, $rpcHost, $rpcPort);

	$response = $coreRpcClient->getAccount($exampleAccount);
	if (!$response['error'])
	{
		echo $response['result'];
	} else {
		echo 'Error ' . $response['error']['code'] . ': ' . $response['error']['message'];
	}

?>