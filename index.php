<?php    
    //Load Classes:    
    include_once("AutoLoader.php");
    AutoLoader::load();

    //Load Config-File:
    include_once("app.config.php");   

    $s = new Site($appName, Themes::Standard, "IndexSite", "de-DE");
    $s->setTag($author);
    $s->setTag($charset);
    $s->setTag($description);
    $s->setTag($keywords);
    $s->setTag($robots);

    $bigButton = new NavigationButton("info", "#", array(0 => new NavigationButton("about us", "about.php", null), 
                                                         1 => new NavigationButton("impressum", "impressum.php", null)
                                                         ), "right");
    $nav = new Navigation("BSFramework", "index.php");
    $nav->addButton(new NavigationButton("home", "index.php", null, "left", true));
    $nav->addButton(new NavigationButton("framework", "#", null));
    $nav->addButton($bigButton);

    $s->addNavigation($nav);

    $s->addContent(new Image("profilPicture", "img img-rounded", "default.bmp"));
    $s->addContent(new HTMLElement("h2", "Header in H2"));
    $s->addContent(new HTMLElement("p", "This is a Paragraph with the ID paragraph and the class paragraph", "paragraph", "paragraph"));
    //Add Panel:
    $s->addContent(new Panel(
                            new HTMLElement("h3", "Panel-Heading"),
                            new HTMLElement("p", "Hello From Here! Wave me :D"),
                            new HTMLElement("p", "This is the Footer of the Panel!")
                            , Colors::Success));



    echo $s->generate();


    //var_dump($s->getContent());

    var_dump($s);
    //var_dump($bigButton);

    //var_dump($nav);


?>