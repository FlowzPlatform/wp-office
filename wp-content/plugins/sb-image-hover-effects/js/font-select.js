/*
 * jQuery.fontselect - A font selector for the Google Web Fonts api
 * Tom Moor, http://tommoor.com
 * Copyright (c) 2011 Tom Moor
 * MIT Licensed
 * @version 0.1
 */(function (a) {
    a.fn.fontselect = function (b) {
        var c = function (a, b) {
            return function () {
                return a.apply(b, arguments)
            }
        },
                d = ["inherit", "ABeeZee", "Abel", "Abhaya+Libre", "Abril+Fatface", "Aclonica", "Acme", "Actor", "Adamina", "Advent+Pro", "Aguafina+Script", "Akronim", "Aladin", "Aldrich", "Alef", "Alegreya", "Alegreya+SC", "Alegreya+Sans", "Alegreya+Sans+SC", "Alex+Brush", "Alfa+Slab+One", "Alice", "Alike", "Alike+Angular", "Allan", "Allerta", "Allerta+Stencil", "Allura", "Almendra", "Almendra+Display", "Almendra+SC", "Amarante", "Amaranth", "Amatic+SC", "Amethysta", "Amiko", "Amiri", "Amita", "Anaheim", "Andada", "Andika", "Angkor", "Annie+Use+Your+Telescope", "Anonymous+Pro", "Antic", "Antic+Didone", "Antic+Slab", "Anton", "Arapey", "Arbutus", "Arbutus+Slab", "Architects+Daughter", "Archivo", "Archivo+Black", "Archivo+Narrow", "Aref+Ruqaa", "Arima+Madurai", "Arimo", "Arizonia", "Armata", "Arsenal", "Artifika", "Arvo", "Arya", "Asap", "Asap+Condensed", "Asar", "Asset", "Assistant", "Astloch", "Asul", "Athiti", "Atma", "Atomic+Age", "Aubrey", "Audiowide", "Autour+One", "Average", "Average+Sans", "Averia+Gruesa+Libre", "Averia+Libre", "Averia+Sans+Libre", "Averia+Serif+Libre", "Bad+Script", "Bahiana", "Baloo", "Baloo+Bhai", "Baloo+Bhaijaan", "Baloo+Bhaina", "Baloo+Chettan", "Baloo+Da", "Baloo+Paaji", "Baloo+Tamma", "Baloo+Tammudu", "Baloo+Thambi", "Balthazar", "Bangers", "Barrio", "Basic", "Battambang", "Baumans", "Bayon", "Belgrano", "Bellefair", "Belleza", "BenchNine", "Bentham", "Berkshire+Swash", "Bevan", "Bigelow+Rules", "Bigshot+One", "Bilbo", "Bilbo+Swash+Caps", "BioRhyme", "BioRhyme+Expanded", "Biryani", "Bitter", "Black+Ops+One", "Bokor", "Bonbon", "Boogaloo", "Bowlby+One", "Bowlby+One+SC", "Brawler", "Bree+Serif", "Bubblegum+Sans", "Bubbler+One", "Buda:300", "Buenard", "Bungee", "Bungee+Hairline", "Bungee+Inline", "Bungee+Outline", "Bungee+Shade", "Butcherman", "Butterfly+Kids", "Cabin", "Cabin+Condensed", "Cabin+Sketch", "Caesar+Dressing", "Cagliostro", "Cairo", "Calligraffitti", "Cambay", "Cambo", "Candal", "Cantarell", "Cantata+One", "Cantora+One", "Capriola", "Cardo", "Carme", "Carrois+Gothic", "Carrois+Gothic+SC", "Carter+One", "Caudex", "Caveat", "Caveat+Brush", "Cedarville+Cursive", "Ceviche+One", "Changa", "Changa+One", "Chango", "Chathura", "Chau+Philomene+One", "Chela+One", "Chelsea+Market", "Chenla", "Cherry+Cream+Soda", "Cherry+Swash", "Chewy", "Chicle", "Chivo", "Chonburi", "Cinzel", "Cinzel+Decorative", "Clicker+Script", "Coda", "Coda+Caption:800", "Codystar", "Coiny", "Combo", "Comfortaa", "Coming+Soon", "Concert+One", "Condiment", "Content", "Contrail+One", "Convergence", "Cookie", "Copse", "Corben", "Cormorant", "Cormorant+Garamond", "Cormorant+Infant", "Cormorant+SC", "Cormorant+Unicase", "Cormorant+Upright", "Courgette", "Cousine", "Coustard", "Covered+By+Your+Grace", "Crafty+Girls", "Creepster", "Crete+Round", "Crimson+Text", "Croissant+One", "Crushed", "Cuprum", "Cutive", "Cutive+Mono", "Damion", "Dancing+Script", "Dangrek", "David+Libre", "Dawning+of+a+New+Day", "Days+One", "Dekko", "Delius", "Delius+Swash+Caps", "Delius+Unicase", "Della+Respira", "Denk+One", "Devonshire", "Dhurjati", "Didact+Gothic", "Diplomata", "Diplomata+SC", "Domine", "Donegal+One", "Doppio+One", "Dorsa", "Dosis", "Dr+Sugiyama", "Droid+Sans", "Droid+Sans+Mono", "Droid+Serif", "Duru+Sans", "Dynalight", "EB+Garamond", "Eagle+Lake", "Eater", "Economica", "Eczar", "El+Messiri", "Electrolize", "Elsie", "Elsie+Swash+Caps", "Emblema+One", "Emilys+Candy", "Encode+Sans", "Encode+Sans+Condensed", "Encode+Sans+Expanded", "Encode+Sans+Semi+Condensed", "Encode+Sans+Semi+Expanded", "Engagement", "Englebert", "Enriqueta", "Erica+One", "Esteban", "Euphoria+Script", "Ewert", "Exo", "Exo+2", "Expletus+Sans", "Fanwood+Text", "Farsan", "Fascinate", "Fascinate+Inline", "Faster+One", "Fasthand", "Fauna+One", "Faustina", "Federant", "Federo", "Felipa", "Fenix", "Finger+Paint",  "Fira+Mono","Fira+Sans", "Fira+Sans+Condensed", "Fira+Sans+Extra+Condensed", "Fjalla+One", "Fjord+One", "Flamenco", "Flavors", "Fondamento", "Fontdiner+Swanky", "Forum", "Francois+One", "Frank+Ruhl+Libre", "Freckle+Face", "Fredericka+the+Great", "Fredoka+One", "Freehand", "Fresca", "Frijole", "Fruktur", "Fugaz+One", "GFS+Neohellenic", "Gabriela", "Gafata", "Galada", "Galdeano", "Galindo", "Gentium+Basic", "Gentium+Book+Basic", "Geo", "Geostar", "Geostar+Fill", "Germania+One", "Gidugu", "Gilda+Display", "Give+You+Glory", "Glass+Antiqua", "Glegoo", "Gloria+Hallelujah", "Goblin+One", "Gochi+Hand", "Gorditas", "Goudy+Bookletter+1911", "Graduate", "Grand+Hotel", "Gravitas+One", "Great+Vibes", "Griffy", "Gruppo", "Gudea", "Gurajada", "Habibi", "Halant", "Hammersmith+One", "Hanalei", "Hanalei+Fill", "Handlee", "Headland+One", "Heebo", "Henny+Penny", "Herr+Von+Muellerhoff", "Hind", "Hind+Guntur", "Hind+Madurai", "Hind+Siliguri", "Hind+Vadodara", "Holtwood+One+SC", "Homemade+Apple", "Homenaje", "IM+Fell+DW+Pica", "IM+Fell+DW+Pica+SC", "IM+Fell+Double+Pica", "IM+Fell+Double+Pica+SC", "IM+Fell+English", "IM+Fell+English+SC", "IM+Fell+French+Canon", "IM+Fell+French+Canon+SC", "IM+Fell+Great+Primer", "IM+Fell+Great+Primer+SC", "Iceberg", "Iceland", "Imprima", "Inconsolata", "Inder", "Indie+Flower", "Inika", "Inknut+Antiqua", "Irish+Grover", "Istok+Web", "Italiana", "Italianno", "Itim", "Jacques+Francois", "Jacques+Francois+Shadow", "Jaldi", "Jim+Nightshade", "Jockey+One", "Jolly+Lodger", "Jomhuria", "Josefin+Sans", "Josefin+Slab", "Joti+One", "Judson", "Julee", "Julius+Sans+One", "Junge", "Jura", "Just+Another+Hand", "Just+Me+Again+Down+Here", "Kadwa", "Kalam", "Kameron", "Kanit", "Kantumruy", "Karla", "Karma", "Katibeh", "Kaushan+Script", "Kavivanar", "Kavoon", "Kdam+Thmor", "Keania+One", "Kelly+Slab", "Kenia", "Khand", "Khmer", "Khula", "Kite+One", "Knewave", "Kotta+One", "Koulen", "Kranky", "Kreon", "Kristi", "Krona+One", "Kumar+One", "Kumar+One+Outline", "Kurale", "La+Belle+Aurore", "Laila", "Lakki+Reddy", "Lalezar", "Lancelot", "Lateef", "Lato", "League+Script", "Leckerli+One", "Ledger", "Lekton", "Lemon", "Lemonada", "Libre+Barcode+128+Text", "Libre+Barcode+39+Extended+Text", "Libre+Barcode+39+Text", "Libre+Baskerville", "Libre+Franklin", "Life+Savers", "Lilita+One", "Lily+Script+One", "Limelight", "Linden+Hill", "Lobster", "Lobster+Two", "Londrina+Outline", "Londrina+Shadow", "Londrina+Sketch", "Londrina+Solid", "Lora", "Love+Ya+Like+A+Sister", "Loved+by+the+King", "Lovers+Quarrel", "Luckiest+Guy", "Lusitana", "Lustria", "Macondo", "Macondo+Swash+Caps", "Mada", "Magra", "Maiden+Orange", "Maitree", "Mako", "Mallanna", "Mandali", "Manuale", "Marcellus", "Marcellus+SC", "Marck+Script", "Margarine", "Marko+One", "Marmelad", "Martel", "Martel+Sans", "Marvel", "Mate", "Mate+SC", "Maven+Pro", "McLaren", "Meddon", "MedievalSharp", "Medula+One", "Meera+Inimai", "Megrim", "Meie+Script", "Merienda", "Merienda+One", "Merriweather", "Merriweather+Sans", "Metal", "Metal+Mania", "Metamorphous", "Metrophobic", "Michroma", "Milonga", "Miltonian", "Miltonian+Tattoo", "Miniver", "Miriam+Libre", "Mirza", "Miss+Fajardose", "Mitr", "Modak", "Modern+Antiqua", "Mogra", "Molengo", "Molle:400i", "Monda", "Monofett", "Monoton", "Monsieur+La+Doulaise", "Montaga", "Montez", "Montserrat", "Montserrat+Alternates", "Montserrat+Subrayada", "Moul", "Moulpali", "Mountains+of+Christmas", "Mouse+Memoirs", "Mr+Bedfort", "Mr+Dafoe", "Mr+De+Haviland", "Mrs+Saint+Delafield", "Mrs+Sheppards", "Mukta", "Mukta+Mahee", "Mukta+Malar", "Mukta+Vaani", "Muli", "Mystery+Quest", "NTR", "Neucha", "Neuton", "New+Rocker", "News+Cycle", "Niconne", "Nixie+One", "Nobile", "Nokora", "Norican", "Nosifer", "Nothing+You+Could+Do", "Noticia+Text", "Noto+Sans", "Nova+Cut", "Nova+Flat", "Nova+Mono", "Nova+Oval", "Nova+Round", "Nova+Script", "Nova+Slim", "Nova+Square", "Numans", "Nunito",  "Nunito+Sans", "Odor+Mean+Chey", "Offside", "Old+Standard+TT", "Oldenburg", "Oleo+Script", "Oleo+Script+Swash+Caps", "Open+Sans", "Open+Sans+Condensed:300", "Oranienbaum", "Orbitron", "Oregano", "Orienta", "Original+Surfer", "Oswald", "Over+the+Rainbow", "Overlock", "Ovo", "Oxygen", "Oxygen+Mono", "PT+Mono", "PT+Sans", "PT+Sans+Caption", "PT+Sans+Narrow", "PT+Serif", "PT+Serif+Caption", "Pacifico", "Padauk", "Palanquin", "Palanquin+Dark", "Pangolin", "Paprika", "Parisienne", "Passero+One", "Passion+One", "Pathway+Gothic+One", "Patrick+Hand", "Patrick+Hand+SC", "Pattaya", "Patua+One", "Pavanam", "Paytone+One", "Peddana", "Peralta", "Permanent+Marker", "Petit+Formal+Script", "Petrona", "Philosopher", "Piedra", "Pinyon+Script", "Pirata+One", "Plaster", "Play", "Playball", "Playfair+Display", "Playfair+Display+SC", "Podkova", "Poiret+One", "Poller+One", "Poly", "Pompiere", "Pontano+Sans", "Poppins", "Port+Lligat+Sans", "Port+Lligat+Slab", "Pragati+Narrow", "Prata", "Preahvihear", "Press+Start+2P", "Pridi", "Princess+Sofia", "Prociono", "Prompt", "Prosto+One", "Proza+Libre", "Puritan", "Purple+Purse", "Quando", "Quantico", "Quattrocento", "Quattrocento+Sans", "Questrial", "Quicksand", "Quintessential", "Qwigley", "Racing+Sans+One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway+Dots", "Ramabhadra", "Ramaraja", "Rambla", "Rammetto+One", "Ranchers", "Rancho", "Ranga", "Rasa", "Rationale", "Ravi+Prakash", "Redressed", "Reem+Kufi", "Reenie+Beanie", "Revalia", "Rhodium+Libre", "Ribeye", "Roboto", "Roboto+Condensed", "Roboto+Mono", "Roboto+Slab", "Rochester", "Rock+Salt", "Rokkitt", "Romanesco", "Ropa+Sans", "Rosario", "Rosarivo", "Rouge+Script", "Rozha+One", "Rubik", "Rubik+Mono+One", "Ruda", "Rufina", "Ruge+Boogie", "Ruluko", "Rum+Raisin", "Ruslan+Display", "Russo+One", "Ruthie", "Rye", "Sacramento", "Sahitya", "Sail", "Saira", "Saira+Condensed", "Saira+Extra+Condensed", "Saira+Semi+Condensed", "Salsa", "Sanchez", "Sancreek", "Sansita", "Sarala", "Sarina", "Sarpanch", "Satisfy", "Scada", "Scheherazade", "Schoolbell", "Scope+One", "Seaweed+Script", "Secular+One", "Sedgwick+Ave", "Sedgwick+Ave+Display", "Sevillana", "Seymour+One", "Shadows+Into+Light", "Shadows+Into+Light+Two", "Shanti", "Share", "Share+Tech", "Share+Tech+Mono", "Shojumaru", "Short+Stack", "Shrikhand", "Siemreap", "Sigmar+One", "Signika", "Signika+Negative", "Simonetta", "Sintony", "Sirin+Stencil", "Six+Caps", "Skranji", "Slabo+13px", "Slabo+27px", "Slackey", "Smokum", "Smythe", "Sniglet", "Snippet", "Snowburst+One", "Sofadi+One", "Sofia", "Sonsie+One", "Sorts+Mill+Goudy", "Source+Code+Pro", "Source+Sans+Pro", "Source+Serif+Pro", "Space+Mono", "Special+Elite", "Spectral", "Spicy+Rice", "Spinnaker", "Spirax", "Squada+One", "Sree+Krushnadevaraya", "Sriracha", "Stalemate", "Stalinist+One", "Stardos+Stencil", "Stint+Ultra+Condensed", "Stint+Ultra+Expanded", "Stoke", "Strait", "Sue+Ellen+Francisco", "Suez+One", "Sumana", "Sunshiney", "Supermercado+One", "Sura", "Suranna", "Suravaram", "Suwannaphum", "Swanky+and+Moo+Moo", "Syncopate", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali+Ramakrishna", "Tenor+Sans", "Text+Me+One", "The+Girl+Next+Door", "Tienne", "Tillana", "Timmana", "Tinos", "Titan+One", "Titillium+Web", "Trade+Winds", "Trirong", "Trocchi", "Trochut", "Trykker", "Tulpen+One", "Ubuntu", "Ubuntu+Condensed", "Ubuntu+Mono", "Ultra", "Uncial+Antiqua", "Underdog", "Unica+One", "UnifrakturCook:700", "UnifrakturMaguntia", "Unkempt", "Unlock", "Unna", "VT323", "Vampiro+One", "Varela", "Varela+Round", "Vast+Shadow", "Vesper+Libre", "Vibur", "Vidaloka", "Viga", "Voces", "Volkhov", "Vollkorn", "Voltaire", "Waiting+for+the+Sunrise", "Wallpoet", "Walter+Turncoat", "Warnes", "Wellfleet", "Wendy+One", "Wire+One", "Work+Sans", "Yanone+Kaffeesatz", "Yantramanav", "Yatra+One", "Yellowtail", "Yeseva+One", "Yesteryear", "Yrsa", "Zeyada", "Zilla+SlabZilla+Slab+Highlight"], e = {style: "font-select", placeholder: "Select a font", lookahead: 2, api: "//fonts.googleapis.com/css?family="}, f = function () {
            function b(b, c) {
                this.$original = a(b);
                this.options = c;
                this.active = !1;
                this.setupHtml();
                this.getVisibleFonts();
                this.bindEvents();
                var d = this.$original.val();
                if (d) {
                    this.updateSelected();
                    this.addFontLink(d)
                }
            }
            b.prototype.bindEvents = function () {
                a("li", this.$results).click(c(this.selectFont, this)).mouseenter(c(this.activateFont, this)).mouseleave(c(this.deactivateFont, this));
                a("span", this.$select).click(c(this.toggleDrop, this));
                this.$arrow.click(c(this.toggleDrop, this))
            };
            b.prototype.toggleDrop = function (a) {
                if (this.active) {
                    this.$element.removeClass("font-select-active");
                    this.$drop.hide();
                    clearInterval(this.visibleInterval)
                } else {
                    this.$element.addClass("font-select-active");
                    this.$drop.show();
                    this.moveToSelected();
                    this.visibleInterval = setInterval(c(this.getVisibleFonts, this), 500)
                }
                this.active = !this.active
            };
            b.prototype.selectFont = function () {
                var b = a("li.active", this.$results).data("value");
                this.$original.val(b).change();
                this.updateSelected();
                this.toggleDrop()
            };
            b.prototype.moveToSelected = function () {
                var b, c = this.$original.val();
                c ? b = a("li[data-value='" + c + "']", this.$results) : b = a("li", this.$results).first();
                this.$results.scrollTop(b.addClass("active").position().top)
            };
            b.prototype.activateFont = function (b) {
                a("li.active", this.$results).removeClass("active");
                a(b.currentTarget).addClass("active")
            };
            b.prototype.deactivateFont = function (b) {
                a(b.currentTarget).removeClass("active")
            };
            b.prototype.updateSelected = function () {
                var b = this.$original.val();
                a("span", this.$element).text(this.toReadable(b)).css(this.toStyle(b))
            };
            b.prototype.setupHtml = function () {
                this.$original.empty().hide();
                this.$element = a("<div>", {"class": this.options.style});
                this.$arrow = a("<div><b></b></div>");
                this.$select = a("<a><span>" + this.options.placeholder + "</span></a>");
                this.$drop = a("<div>", {"class": "fs-drop"});
                this.$results = a("<ul>", {"class": "fs-results"});
                this.$original.after(this.$element.append(this.$select.append(this.$arrow)).append(this.$drop));
                this.$drop.append(this.$results.append(this.fontsAsHtml())).hide()
            };
            b.prototype.fontsAsHtml = function () {
                var a = d.length, b, c, e = "";
                for (var f = 0; f < a; f++) {
                    b = this.toReadable(d[f]);
                    c = this.toStyle(d[f]);
                    e += '<li data-value="' + d[f] + '" style="font-family: ' + c["font-family"] + "; font-weight: " + c["font-weight"] + '">' + b + "</li>"
                }
                return e
            };
            b.prototype.toReadable = function (a) {
                return a.replace(/[\+|:]/g, " ")
            };
            b.prototype.toStyle = function (a) {
                var b = a.split(":");
                return{"font-family": this.toReadable(b[0]), "font-weight": b[1] || 400}
            };
            b.prototype.getVisibleFonts = function () {
                if (this.$results.is(":hidden"))
                    return;
                var b = this, c = this.$results.scrollTop(), d = c + this.$results.height();
                if (this.options.lookahead) {
                    var e = a("li", this.$results).first().height();
                    d += e * this.options.lookahead
                }
                a("li", this.$results).each(function () {
                    var e = a(this).position().top + c, f = e + a(this).height();
                    if (f >= c && e <= d) {
                        var g = a(this).data("value");
                        b.addFontLink(g)
                    }
                })
            };
            b.prototype.addFontLink = function (b) {
                var c = this.options.api + b;
                a("link[href*='" + b + "']").length === 0 && a("link:last").after('<link href="' + c + '" rel="stylesheet" type="text/css">')
            };
            return b
        }();
        return this.each(function (b) {
            b && a.extend(e, b);
            return new f(this, e)
        })
    }
})(jQuery);