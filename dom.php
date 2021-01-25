<script>

window.onload = function() {
        var dv = document.createElement("div");
        dv.setAttribute("id", "main");
        dv.setAttribute ('class', 'd_wrap');
        document.body.appendChild(dv);

        /** 
        header container 
        **/
        var container = document.createElement("div");
        container.setAttribute("id", "heder-container");
        container.setAttribute ('class', 'container');
       dv.appendChild(container);

        /* nav element */
        
        /**
         * logo container
         */
        site_brand = document.createElement('div');
       logo =  document.createElement('img');
       logo.setAttribute('src','https://upload.wikimedia.org/wikipedia/commons/5/59/Logo-Logo.svg')
       site_brand.appendChild(logo);
       container.appendChild(site_brand);

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
        menulist1 = document.createElement('li');
        menulink1 = document.createElement('a');
        menulink1.setAttribute("href","");
        menutext1 = document.createTextNode("About");
        
        /**
         * append Element in nav
         */
        menulink.appendChild(menutext);
        menulist.appendChild(menulink);
        menu.appendChild(menulist);
        menulink1.appendChild(menutext1);
        menulist1.appendChild(menulink1);
        menu.appendChild(menulist1);
        nav.appendChild(menu);
        container.appendChild(nav);
        
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
            
            /*
            *style 
            */
            dv.style.backgroundImage="url(https://static.vecteezy.com/system/resources/previews/000/677/302/large_2x/abstract-technology-banner-background.jpg)";
            container.style.cssText="display:flex";
            menu.style.cssText = "display: flex; list-style: none";
            menulist.style.cssText = "padding:15px 20px";
            menulist1.style.cssText = "padding:15px 20px";
            menulink.style.cssText ="color: #fff"
            pehra.style.color="white";
            heading.style.color="white";
            nav.style.display="flex";
            
      }
</script>