<?php
/**
 * Product Name: AkashNetLab Server Status Page
 * Copyright © 2025 AkashNetLab
 * Developer: AkashNetLab
 * Email: opensource [at] AkashNetLab [dot] dev
 *
 * Date: 2025
 */

$servicesRegistry = [
    ['label' => 'Web Server', 'address' => '192.168.1.1', 'port' => 80],
    ['label' => 'Database Server', 'address' => '192.168.1.2', 'port' => 3306],
    // Add additional services to monitor below
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkashNetLab | Server Status Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="status-dashboard">
        <header>
            <h1>AkashNetLab Server Status Monitoring</h1>
        </header>
        <section>
            <table class="status-table">
                <thead>
                    <tr>
                        <th>Service Label</th>
                        <th>Address</th>
                        <th>Port</th>
                        <th>Current Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicesRegistry as $index => $service): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($service['label']); ?></td>
                            <td><?php echo htmlspecialchars($service['address']); ?></td>
                            <td><?php echo htmlspecialchars($service['port']); ?></td>
                            <td>
                                <span class="status" id="status-entry-<?php echo $index; ?>"
                                      data-host="<?php echo htmlspecialchars($service['address']); ?>"
                                      data-port="<?php echo htmlspecialchars($service['port']); ?>">
                                    Verifying...
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="check_request.js"></script>
</body>
</html>