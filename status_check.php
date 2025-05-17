<?php
/**
 * Product Name: AkashNetLab Server Status Page
 * Copyright © 2025 AkashNetLab
 * Developer: AkashNetLab
 * Email: opensource [at] AkashNetLab [dot] dev
 *
 * Date: 2025
 */
header('Content-Type: application/json');

$targetHost = $_GET['host'] ?? '';
$targetPort = $_GET['port'] ?? '';

if (!$targetHost || !$targetPort) {
    echo json_encode([
        'online' => false,
        'reason' => 'Missing endpoint parameters'
    ]);
    exit;
}

function probeNodeStatus($address, $port) {
    $sock = @fsockopen($address, $port, $errCode, $errMsg, 2.5);
    if ($sock) {
        fclose($sock);
        return true;
    }
    return false;
}

$response = [
    'host' => $targetHost,
    'port' => $targetPort,
    'online' => probeNodeStatus($targetHost, $targetPort)
];

echo json_encode($response);