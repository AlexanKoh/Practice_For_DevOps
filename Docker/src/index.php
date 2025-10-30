<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Practice Site</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .tech-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .tech-item {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .server-info {
            margin-top: 30px;
            font-size: 0.9em;
            color: #ccc;
        }
        .endpoints {
            margin-top: 20px;
            font-size: 0.9em;
        }
        .endpoint-link {
            color: #4fc3f7;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the DevOps practice site!</h1>
        <p>This site was created to practice the skills of working with modern deployment and monitoring tools.</p>
        
        <div class="tech-list">
            <div class="tech-item">Docker</div>
            <div class="tech-item">Ansible</div>
            <div class="tech-item">Kubernetes</div>
            <div class="tech-item">Grafana</div>
            <div class="tech-item">Prometheus</div>
        </div>
        
        <div class="server-info">
            <?php
                echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "<br>";
                echo "PHP version: " . phpversion() . "<br>";
                echo "Server Time: " . date("Y-m-d H:i:s") . "<br>";
                echo "The client's IP address: " . ($_SERVER['REMOTE_ADDR'] ?? 'N/A');
            ?>
        </div>
        
        <div class="endpoints">
            <p>Available endpoints for monitoring:</p>
            <a href="/health" class="endpoint-link">/health</a> | 
            <a href="/metrics" class="endpoint-link">/metrics</a>
        </div>
    </div>
</body>
</html>
