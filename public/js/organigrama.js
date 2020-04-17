var briseño = ["Director General XD", "Diego Ramón Briseño Dominguez", "d.dominguez@gmail.com", "1585724400-bird.png"];
var direc;
console.log(direc);
var config = {
        container: "#organigrama",

        nodeAlign: "BOTTOM",
        
        connectors: {
            type: 'step'
        },
        node: {
            HTMLclass: 'nodeExample1'
        }
    },

    ceo = {
        HTMLclass: 'yellow',
        text: {
            name: briseño[0],
            title: briseño[0],
            desc: briseño[1],
            contact: {
                val: briseño[2],
                href: "/isc-inicio-formContacto/"+briseño[2],
            } 
        },
        image: "/images/organigrama/"+briseño[3]
    },

    cto = {
        parent: ceo,
        HTMLclass: 'skin',
        text:{
            name: "Dirección Académica y de vinculación",
            title: "Director del area Académica y de vinculación",
            contact: "M.C Cesar I. Flota Perez",
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    cbo = {
        parent: cto,
        HTMLclass: 'light-skin',
        text:{
            name: "Subdirección Académica",
            title: "Subdirector del area Académica y de vinculación",
            contact: "MC. Anabel Pinzon de la O",
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    cdo = {
        parent: cbo,
        HTMLclass: 'gray',
        childrenDropLevel: 2,
        text:{
            name: "División de ISC",
            title: "Área de División",
            contact: "Luis Salinas",
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    cdi = {
        parent: cdo,
        HTMLclass: 'light-gray',
        text:{
            name: "LABORATORIOS",
            
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    cio = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Sistemas Computacionales",
            title: "ING. Eduardo Mejía Flota"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Cisco System",
            title: "MTE. Noemí G. Castillo Sosa",
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    cio2 = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Microprocesadores",
            title: "Sin Encargado" 
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso2 = {
        parent: cdo,
        HTMLclass: 'blue',
        text:{
            name: "DOCENTES"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso3 = {
        parent: ciso2,
        HTMLclass: 'blue',
        childrenDropLevel: 2,
        text:{
            name: "Presidenta",
            title: "MC. Arizbé del Socorro Arana Kantún"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso4 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "DR. Niels Henryk Aranda Cuevas"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso5 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Cintia Isabel Arceo Fuentes"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso6 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTE. Noemí G. Castillo Sosa"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso7 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Carolina Montalvo Espinosas"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso8 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTI. Gabriel Eduardo Balam Pool"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso9 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTI. Marcos Gaspar Pech Cruz"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso10 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Eduardo Castillo Moo"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso11 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Paloma Góngora Sabido"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    ciso12 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Plácido Balam Can"
        },
        image: "/images/organigrama/1585724400-bird.png"
    },

    chart_config = [
        config,
        ceo,cto,cbo,
        cdo,cdi,cio,ciso,
        cio2,ciso2,ciso3,ciso4,
        ciso5,ciso6,ciso7,ciso8,
        ciso9,ciso10,ciso11,ciso12,
    ];