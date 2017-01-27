<?php
    include 'Database.php';
    include '../domain/Moto.php';

    $motos = [];

    $moto = new Moto();
    $moto->setId( 1 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('V-Rod');
    $moto->setImagem('http://motordream.uol.com.br/upload/noticia/13895757499537.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 2 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('IRON 883');
    $moto->setImagem('http://www.motoriorentals.com.br/es/media/k2/items/cache/6f43b5263fbba79c5962514b85d34738_L.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 3 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('1200 CUSTOM CB');
    $moto->setImagem('http://www.moto.com.br/img/2014/03/12/img75160-1394633809-v580x435.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 4 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('FORTY-EIGHT');
    $moto->setImagem('http://www.memoriamotor.r7.com/wp-content/uploads/2015/06/Forty-Eight.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 5 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('ROADSTER');
    $moto->setImagem('http://motorcycle.com.vsassets.com/blog/wp-content/uploads/2016/05/050316-Harley-Davidson-Roadster-1-9.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 6 );
    $moto->setMarca('Harley-Davidson');
    $moto->setModelo('STREET BOB');
    $moto->setImagem('https://i.ytimg.com/vi/bYHiaKMpSaE/maxresdefault.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 7 );
    $moto->setMarca('Yamaha');
    $moto->setModelo('V Star 1300');
    $moto->setImagem('https://cloud.yamahamotorsports.com/library/img.jpg?id=26284&w=840');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 8 );
    $moto->setMarca('Yamaha');
    $moto->setModelo('Bolt R-Spec');
    $moto->setImagem('http://s1.cdn.autoevolution.com/images/moto_gallery/YAMAHABoltR-4399_10.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    $moto = new Moto();
    $moto->setId( 9 );
    $moto->setMarca('Yamaha');
    $moto->setModelo('V Star 950 Tourer');
    $moto->setImagem('http://moto.zombdrive.com/images/yamaha-v-star-950-tourer-1.jpg');
    $moto->setEhFavorito( false );
    $motos[] = $moto;

    Database::saveDatabase( 'motos.json', $motos );

