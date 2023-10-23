
document.addEventListener("DOMContentLoaded", function () {
    const hambuger = document.querySelector('.hambuger');
    const navMenu = document.querySelector('.nav-menu');

    function mobileMenu() {
        hambuger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }

    if (hambuger) {
        hambuger.addEventListener("click", mobileMenu);
    }
});


const navLink = document.querySelectorAll('.nav-link');
navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
    hambuger.classList.remove("active");
    navMenu.classList.remove("active");
}

function img(anything) {
    document.querySelector('.slide').src = anything;
}

function change(change) {
    const line = document.querySelector('.image');
    line.style.background = change;
}
document.addEventListener('DOMContentLoaded', function () {
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (var i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (var i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }
});


let products = {
    data: [
        {
            productName: "Combinado",
            category: "menu",
            price: "26.00   ",
            image: "../image/combinado.jpg",
        },

        {
            productName: "Pollo con verduras y chaufa",
            category: "menu",
            price: "26.00",
            image: "../image/polloconverduras.jpg",
        },

        {
            productName: "Enrollado de pollo con chaufa",
            category: "menu",
            price: "26.00",
            image: "../image/enrollado de pollo.jpg",
        },

        {
            productName: "Chancho con tamarindo y chaufa",
            category: "menu",
            price: "27.00",
            image: "../image/chancho con tamarindo.jpg",
        },

        {
            productName: "Kamlu wantan con chaufa",
            category: "menu",
            price: "27.00",
            image: "../image/kanlu wantan con chaufa.jpg",
        },

        {
            productName: "Langostino saltado con verduras",
            category: "menu",
            price: "28.00",
            image: "../image/langostino saltado.jpg",
        },

        {
            productName: "Aeropuerto",
            category: "menu",
            price: "26.00",
            image: "../image/aeropuerto.jpg",
        },

        {
            productName: "Chicharón de pollo",
            category: "menu",
            price: "36.00",
            image: "../image/chicharron de pollo.jpg",
        },

        {
            productName: "Wantan frito (12 Un.)",
            category: "menu",
            price: "27.00",
            image: "../image/wantan frito.jpg",
        },

        {
            productName: "Pollo con tamarindo",
            category: "menu",
            price: "26.00",
            image: "../image/pollo con tamarindo.jpg",
        },
        {
            productName: "Chijaukay con chaufa",
            category: "menu",
            price: "27.00",
            image: "../image/chijaukay.jpg",
        },

        // TRAGOS

        {
            productName: "Daiquiri",
            category: "tragos",
            price: "20.00",
            image: "../image/t1.jpg",
        },

        {
            productName: "Piña colada",
            category: "tragos",
            price: "20.00",
            image: "../image/t2.jpg",
        },

        {
            productName: "Machu Picchu",
            category: "tragos",
            price: "20.00",
            image: "../image/t3.jpg",
        },

        {
            productName: "Algarrobina",
            category: "tragos",
            price: "20.00",
            image: "../image/t4.jpg",
        },

        {
            productName: "Pisco Sour",
            category: "tragos",
            price: "15.00",
            image: "../image/t5.jpg",
        },

        {
            productName: "Chilcano clásico",
            category: "tragos",
            price: "15.00",
            image: "../image/t6.jpeg",
        },

        {
            productName: "Chilcano frutado",
            category: "tragos",
            price: "20.00",
            image: "../image/t7.jpg",
        },

        {
            productName: "Cuba libre",
            category: "tragos",
            price: "15.00",
            image: "../image/t8.jpg",
        },
        {
            productName: "Caipirinha",
            category: "tragos",
            price: "15.00",
            image: "../image/t9.jpg",
        },

        {
            productName: "Michelada",
            category: "tragos",
            price: "25.00",
            image: "../image/t10.jpg",
        },

        {
            productName: "Margarita",
            category: "tragos",
            price: "25.00",
            image: "../image/t11.jpg",
        },

        // Bebidas

        {
            productName: "Pilsen",
            category: "bebidas",
            price: "7.00",
            image: "../image/b1.jpg",
        },

        {
            productName: "Cuzqueña ",
            category: "bebidas",
            price: "8.00",
            image: "../image/b2.jpg",
        },

        {
            productName: "Cuzqueña trigo ",
            category: "bebidas",
            price: "8.00",
            image: "../image/b3.jpg",
        },
        {
            productName: "Cuzqueña  negra",
            category: "bebidas",
            price: "8.00",
            image: "../image/b4.jpg",
        },

        {
            productName: "Cuzqueña doble malta ",
            category: "bebidas",
            price: "8.00",
            image: "../image/b5.png",
        },
        {
            productName: "Corona",
            category: "bebidas",
            price: "9.00",
            image: "../image/b6.jpg",
        },

    
        {
            productName: "Budweiser",
            category: "bebidas",
            price: "9.00",
            image: "../image/b7.jpg",
        },

        {
            productName: "Stella artois",
            category: "bebidas",
            price: "9.00",
            image: "../image/b8.jpg",
        },

        {
            productName: "Barbarian quinua",
            category: "bebidas",
            price: "9.00",
            image: "../image/b9.jpg",
        },

        {
            productName: "Barbarian trigo",
            category: "bebidas",
            price: "9.00",
            image: "../image/b10.jpg",
        },

        {
            productName: "Inka kola",
            category: "bebidas",
            price: "4.00",
            image: "../image/b11.webp",
        },

        {
            productName: "Coca cola",
            category: "bebidas",
            price: "4.00",
            image: "../image/b12.jpg",
        },
        {
            productName: "Fanta",
            category: "bebidas",
            price: "4.00",
            image: "../image/b13.jpg",
        },
        {
            productName: "Fanta kola inglesa",
            category: "bebidas",
            price: "4.00",
            image: "../image/b14.jpg",
        },
        {
            productName: "San Mateo",
            category: "bebidas",
            price: "4.00",
            image: "../image/b15.png",
        },
        {
            productName: "Powerade",
            category: "bebidas",
            price: "4.00",
            image: "../image/b16.webp",
        },

        //Jugos

        {
            productName: "Jugo de papaya (1L)",
            category: "jugos",
            price: "15.00",
            image: "../image/j1.jpg",
        },

        {
            productName: "Jugo de piña (1L)",
            category: "jugos",
            price: "15.00",
            image: "../image/j2.jpg",
        },

        {
            productName: "Jugo de naranja (1L)",
            category: "jugos",
            price: "15.00",
            image: "../image/j3.jpg",
        },

        {
            productName: "Limonada (1L)",
            category: "jugos",
            price: "14.00",
            image: "../image/j4.jpg",
        },

        {
            productName: "Maracuya (1L)",
            category: "jugos",
            price: "14.00",
            image: "../image/j5.jpg",
        },

        {
            productName: "Jugo de chirimoya (1L)",
            category: "jugos",
            price: "16.00",
            image: "../image/j6.jpg",
        },

        {
            productName: "Jugo de guanábana (1L)",
            category: "jugos",
            price: "16.00",
            image: "../image/j7.jpg",
        },

        {
            productName: "Jugo de arándanos con leche (1L)",
            category: "jugos",
            price: "25.00",
            image: "../image/j8.jpg",
        },

        {
            productName: "Jugo de plátano con leche (1L)",
            category: "jugos",
            price: "20.00",
            image: "../image/j9.jpg",
        },

        {
            productName: "Jugo de lúcuma con leche (1L)",
            category: "jugos",
            price: "20.00",
            image: "../image/j10.jpg",
        },

        {
            productName: "Jugo de mango con leche (1L)",
            category: "jugos",
            price: "20.00",
            image: "../image/j11.jpg",
        },
        

        {
            productName: "Jugo de fresa con leche (1L)",
            category: "jugos",
            price: "20.00",
            image: "../image/j12.jpg",
        },
        

    ],
};

document.addEventListener("DOMContentLoaded", function () {
    for (let i of products.data) {
        let card = document.createElement("div");
        card.classList.add("card", `${i.category}`, "hide");

        let imgContainer = document.createElement("div");
        imgContainer.classList.add("image-container");

        let image = document.createElement("img");
        image.setAttribute("src", i.image);
        imgContainer.appendChild(image);
        card.appendChild(imgContainer);


        let contaner = document.createElement("div");
        contaner.classList.add("contaner");

        let name = document.createElement("h5");
        name.classList.add("product-name");
        name.innerText = i.productName.toUpperCase();
        contaner.appendChild(name);

        let price = document.createElement("h6");
        price.innerText = "S/." + i.price;
        contaner.appendChild(price);

        card.appendChild(contaner);
        document.getElementById("products").appendChild(card);
    }
});



function filterProduct(value) {
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach(button => {
        if (value.toUpperCase() == button.innerText.toUpperCase()) {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });

    let elements = document.querySelectorAll(".card");

    elements.forEach((element) => {
        if (value == "todo") {
            element.classList.remove("hide");
        }
        else {
            if (element.classList.contains(value)) {
                element.classList.remove("hide");
            } else {
                element.classList.add("hide");
            }
        }
    })
};
document.addEventListener('DOMContentLoaded', (event) => {

    document.getElementById("search").addEventListener("click", () => {
        let searchInput = document.getElementById("search-input").value;

        let elements = document.querySelectorAll(".product-name");

        let cards = document.querySelectorAll(".card");
        console.log(searchInput);
        elements.forEach((element, index) => {
            if (element.innerText.includes(searchInput.toUpperCase())) {
                cards[index].classList.remove("hide");
            } else {
                cards[index].classList.add("hide");
            }
        });
    });
});

window.onload = () => {
    filterProduct("todo");
};