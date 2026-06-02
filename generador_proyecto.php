<?php
// generador_proyecto.php
echo "🚀 Generando estructura del proyecto PHP Profesional...\n";

$structure = [
    'app/Controllers',
    'app/Models',
    'app/Views',
    'app/Middleware',
    'config',
    'public/assets/css',
    'public/assets/js',
    'storage/logs',
    'storage/uploads'
];

foreach ($structure as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
        echo "✅ Carpeta creada: $dir\n";
    }
}

// Archivo Front Controller
file_put_contents('public/index.php', '<?php
// Front Controller: Punto único de entrada
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../app/Models/Database.php";

// Enrutamiento básico (Ejemplo)
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
// Aquí iría la lógica del Router para llamar al Controlador
echo "<h1>Proyecto Base Funcional</h1><p>La estructura se generó correctamente.</p>";
');

// Archivo de Configuración
file_put_contents('config/config.php', '<?php
// config.php: Variables de entorno simuladas
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "proyecto_db");
define("DB_USER", "root");
define("DB_PASS", "");
define("APP_URL", "http://localhost/proyecto/public");
define("SESSION_NAME", "secure_php_session");
');

// Clase Database (Singleton PDO)
file_put_contents('app/Models/Database.php', '<?php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false, // Crucial para seguridad real
        ];
        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log("Error de conexión: " . $e->getMessage());
            die("Error de conexión a la base de datos.");
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
');

// .htaccess para redirección al Front Controller
file_put_contents('public/.htaccess', 'RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
');

echo "🎉 ¡Estructura generada con éxito! Revisa la carpeta.\n";
?>