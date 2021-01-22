<script>

window.onload = function() {
        var dv = document.createElement("div");
        dv.setAttribute("id", "main");
        dv.setAttribute ('class', 'd_wrap');
        document.body.appendChild(dv);

        /* nav element */
        /**
         * logo container
         */
        site_brand = document.createElement('div');
       logo =  document.createElement('img');
       logo.setAttribute('src','https://upload.wikimedia.org/wikipedia/commons/5/59/Logo-Logo.svg')
       site_brand.appendChild(logo);
       dv.appendChild(site_brand);

        /**
         * nav container
         */
        nav = document.createElement('div');
        nav.setAttribute("id", "menu_block");
        menu = document.createElement('ul');
        menulist = document.createElement('li');
        menulink = document.createElement('a');
        menulink.setAttribute("href","");
        menutext = document.createTextNode("Home");
        
        /**
         * append Element in nav
         */
        menulink.appendChild(menutext);
        menulist.appendChild(menulink);
        menu.appendChild(menulist);
        nav.appendChild(menu);
        dv.appendChild(nav);
        
        /**
         * Hero banner text
         */
            contente_box = document.createElement('div');
            heading = document.createElement('h1');
            heading_text = document.createTextNode("Welcome");
            heading.appendChild(heading_text);
            pehra = document.createElement('p');
            p_text = document.createTextNode("This is a tutorial on how to append content to the HTML body of a web page");
            pehra.appendChild(p_text);

            contente_box.appendChild(heading);
            contente_box.appendChild(pehra);
            dv.appendChild(contente_box);
            
            /**style */
            dv.style.backgroundImage="url(https://static.vecteezy.com/system/resources/previews/000/677/302/large_2x/abstract-technology-banner-background.jpg)";
            pehra.style.color="white";
            heading.style.color="white";
            nav.style.display="flex";
            
      }
</script>