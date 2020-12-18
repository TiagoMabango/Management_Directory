<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->

<?php

echo "<p style='color:green; font-size:20px;'>" ." verificar, criar e abrir <span style='color:#088'>  arquivos </span>" ."</p>";

//Crirar uma pasta
$folder = __DIR__."/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder,0755);
}else {
    var_dump(scandir($folder));
}
  


$file = __DIR__."/file.txt";
echo "<br> <br>";
var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__)
);

echo "<p style='color:green; font-size:20px;'>" ." Copiar e remover <span style='color:#088'>  arquivos </span>" ."</p>";

if(!file_exists($file) && !is_file($file)){
    fopen($file,"w");
}else{
    copy($file,$folder."/".basename($file));
    // usando rename para criar novos arquivos evitando alterção de um arquivo já existente
    //rename(__DIR__."/uploads/file.txt", __DIR__."/uploads/".time()."".pathinfo($file)["extension"]);

}






//cria primeiro a pasta e depois coloca arquivo la, só assim executa as operaçõees
//mkdir("remove",0755);

$dirRemove = __DIR__."/remove";
$dirFile = array_diff(scandir($dirRemove),['.','..']);
$dirCount = count($dirFile);

var_dump(
    $dirFile,
    $dirCount
);


//Removendo um arquivo
if($dirCount>=1){

    foreach(scandir($dirRemove) as $fileItem){
        $fileItem  = __DIR__."/remove/{$fileItem}";
        if(file_exists($fileItem) && is_file($fileItem)){
            unlink($fileItem);
        }
    }
}
?>