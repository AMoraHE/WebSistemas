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
            name: "Dirección General",
            title: "Director General",
            contact: "Diego Briseño",
        },
        image: "public/images/2.png"
    },

    cto = {
        parent: ceo,
        HTMLclass: 'skin',
        text:{
            name: "Dirección Académica y de vinculación",
            title: "Director del area Académica y de vinculación",
            contact: "M.C Cesar I. Flota Perez",
        },
        image: "public/images/2.png"
    },
    cbo = {
        parent: cto,
        HTMLclass: 'light-skin',
        text:{
            name: "Subdirección Académica",
            title: "Subdirector del area Académica y de vinculación",
            contact: "MC. Anabel Pinzon de la O",
        },
        image: "public/images/2.1.png"
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
        image: "public/images/2.png"
    },
    cdi = {
        parent: cdo,
        HTMLclass: 'light-gray',
        text:{
            name: "LABORATORIOS",
            
        },
        image: "public/images/lap.png"
    },

    cio = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Sistemas Computacionales",
            title: "ING. Eduardo Mejía Flota"
        },
        image: "public/images/2.png"
    },
    ciso = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Cisco System",
            title: "MTE. Noemí G. Castillo Sosa",
        },
        image: "public/images/2.1.png"
    },
    cio2 = {
        parent: cdi,
        HTMLclass: 'light-gray',
        text:{
            name: "Área de Laboratorio de Microprocesadores",
            title: "Sin Encargado" 
        },
        image: "public/images/2.png"
    },
    ciso2 = {
        parent: cdo,
        HTMLclass: 'blue',
        text:{
            name: "DOCENTES"
        },
        image: "public/images/doc.png"
    },
    ciso3 = {
        parent: ciso2,
        HTMLclass: 'blue',
        childrenDropLevel: 2,
        text:{
            name: "Presidenta",
            title: "MC. Arizbé del Socorro Arana Kantún"
        },
        image: "public/images/2.1.png"
    },
    ciso4 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "DR. Niels Henryk Aranda Cuevas"
        },
        image: "public/images/2.png"
    },
    ciso5 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Cintia Isabel Arceo Fuentes"
        },
        image: "public/images/2.1.png"
    },
    ciso6 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTE. Noemí G. Castillo Sosa"
        },
        image: "public/images/2.1.png"
    },
    ciso7 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Carolina Montalvo Espinosas"
        },
        image: "public/images/2.1.png"
    },
    ciso8 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTI. Gabriel Eduardo Balam Pool"
        },
        image: "public/images/2.png"
    },
    ciso9 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "MTI. Marcos Gaspar Pech Cruz"
        },
        image: "public/images/2.png"
    },
    ciso10 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Eduardo Castillo Moo"
        },
        image: "public/images/2.png"
    },
    ciso11 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Paloma Góngora Sabido"
        },
        image: "public/images/2.1.png"
    },ciso12 = {
        parent: ciso3,
        HTMLclass: 'blue',
        text:{
            name: "Docente",
            title: "ING. Plácido Balam Can"
        },
        image: "public/images/2.png"
    },

    chart_config = [
        config,
        ceo,cto,cbo,
        cdo,cdi,cio,ciso,
        cio2,ciso2,ciso3,ciso4,
        ciso5,ciso6,ciso7,ciso8,
        ciso9,ciso10,ciso11,ciso12,
    ];

   