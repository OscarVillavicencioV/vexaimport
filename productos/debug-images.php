<?php
echo "<h2>🔍 Debug de Imágenes - Rutas Corregidas</h2>";
echo "<hr>";

echo "<h3>URLs directas de las imágenes:</h3>";
echo "<strong>Logo cabezal SVG:</strong><br>";
echo "<a href='../assets/images/logo_cabezal.svg' target='_blank'>../assets/images/logo_cabezal.svg</a><br>";
echo "<img src='../assets/images/logo_cabezal.svg' style='max-width:200px; border:2px solid red; margin:10px;'><br><br>";

echo "<strong>Imagen del producto (NUEVA RUTA):</strong><br>";
echo "<a href='../productos/images/cepillo-vaporizador/imagen1.png' target='_blank'>../productos/images/cepillo-vaporizador/imagen1.png</a><br>";
echo "<img src='../productos/images/cepillo-vaporizador/imagen1.png' style='max-width:200px; border:2px solid blue; margin:10px;'><br><br>";

echo "<strong>Imagen de precio SVG (NUEVA RUTA):</strong><br>";
echo "<a href='../productos/images/cepillo-vaporizador/precio.svg' target='_blank'>../productos/images/cepillo-vaporizador/precio.svg</a><br>";
echo "<img src='../productos/images/cepillo-vaporizador/precio.svg' style='max-width:200px; border:2px solid green; margin:10px;'><br>";

echo "<hr>";
echo "<h3>Simulación del header del producto (RUTAS CORREGIDAS):</h3>";
$header_logo = '../assets/images/logo_cabezal.svg';
$header_product_image = '../productos/images/cepillo-vaporizador/imagen1.png';
$header_price_image = '../productos/images/cepillo-vaporizador/precio.svg';
?>

<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px; text-align: center;">
    <div style="margin-bottom: 15px;">
        <img src="<?php echo $header_logo; ?>" style="max-width:200px; display:block; margin:0 auto;">
        <p style="color:white; margin:5px 0;">✅ Logo cabezal</p>
    </div>
    <div style="margin-bottom: 15px;">
        <img src="<?php echo $header_product_image; ?>" style="max-width:300px; display:block; margin:0 auto; border-radius:10px;">
        <p style="color:white; margin:5px 0;">📱 Imagen del producto</p>
    </div>
    <div>
        <img src="<?php echo $header_price_image; ?>" style="max-width:250px; display:block; margin:0 auto;">
        <p style="color:white; margin:5px 0;">💰 Imagen de precio</p>
    </div>
</div>

<hr>
<h3>Verificación de archivos:</h3>
<?php
$files = [
    '../assets/images/logo_cabezal.svg',
    '../productos/images/cepillo-vaporizador/imagen1.png', 
    '../productos/images/cepillo-vaporizador/precio.svg'
];

foreach($files as $file) {
    echo "<p>";
    if(file_exists($file)) {
        echo "✅ <strong>EXISTE:</strong> $file";
    } else {
        echo "❌ <strong>NO EXISTE:</strong> $file";
    }
    echo "</p>";
}
?>
