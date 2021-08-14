<?php

include("objeto_blog.php");

class Manejo_Objetos{
    private $conexion;
    public function __construct($conexion){
        $this->setConexion($conexion);
    }

    public function setConexion(PDO $conexion){
        $this->conexion = $conexion;
    }

    public function getContenidoPorFecha(){
        require("paginacion.php");
        $matriz=array();
        $contador=0;
        $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha LIMIT $empezar_desde, $tamanio_paginas");
        
        while($registro=$resultado->fetch((PDO::FETCH_ASSOC))){
            $blog=new Objeto_blog();
            $blog->setId($registro["id"]);
            $blog->setTitulo($registro["titulo"]);
            $blog->setFecha($registro["fecha"]);
            $blog->setComentario($registro["comentario"]);
            $blog->setImagen($registro["imagen"]);

            $matriz[$contador]=$blog;
            $contador++;
        }

        return $matriz;
    }

    public function setContenido(Objeto_blog $blog){        
        // $sql="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('$blog->getTitulo()', '$blog->getFecha()', '$blog->getComentario()', '$blog->getImagen()')";

        $sql="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('" . $blog->getTitulo() ."', '" . $blog->getFecha() ."', '" . $blog->getComentario() . "', '" . $blog->getImagen() . "')";

        $this->conexion->exec(($sql));
    }
}



?>