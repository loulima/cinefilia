<!DOCTYPE html>
<html <?php language_attributes(); ?> class=" p-0 m-0 top-0">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?> 
</head>
<body>
    <header class="flex flex-col">
        <div class='bg-slate-300 flex flex-col justify-center justify-items-center items-center'>
            <h1 class="font-[700]  font-spaceGrotesk text-[1.75rem]">Cinefilia</h1>
            <p class="font-[500] text-[0.75rem]">Um espaço para o cinema</p>
        </div>
        
        <nav class=' bg-orange-300 font-rubik font-[400] '>
            <ul class="flex flex-row  justify-center gap-4 p-4">
                <li class="flex flex-row justify-center gap-4 p-2"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="flex flex-row justify-center gap-4 p-2 border-black border-l"><a href="<?php echo site_url('/category/series'); ?>">Séries</a></li>
                <li class="flex flex-row justify-center gap-4 p-2 border-black border-l"><a href="<?php echo site_url('/category/filmes'); ?>">Filmes</a></li>
                <li class="flex flex-row justify-center gap-4 p-2 border-black border-l"><a href="<?php echo site_url('/category/entrevistas'); ?>">Entrevistas</a></li>
                <li class="flex flex-row justify-center gap-4 p-2 border-black border-l"><a href="<?php echo site_url('/category/noticias'); ?>">Notícias</a></li>
            </ul>
        </nav>
    </header>
