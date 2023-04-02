$(function() {
  // init class
  class ModelAccordion{
    name;
    image;
    description;
  
    constructor(name, image, description) {
      this.name =  name; 
      this.image =  image; 
      this.description =  description; 
    }
  }

  class Components{
    accordion(number,accordion){
      let elem = `
        <div class="accordion" id="accordion_${number}">
          <div class="header_accordion" id="header_accordion_${number}">
            <div id="arrow_button_${number}"></div>
            <h2>${accordion.name}</h2>
          </div>
          <div class="main_accordion" id="main_accordion_${number}">
            <img src="${accordion.image}" alt="image ${accordion.name}">
            <p>${accordion.description}</p>
          </div>
        </div>
      `
      $('body').append(elem);
      (new Services()).clickArrowAccordion(number);
    }
  }
  class Services{

    changeTitleOnScreen(){
      $( window ).resize(function() {
  
        if ($(this).width() > 790){
          title.html("Version &#60;&#60;fullscreen&#62;&#62;");
        }
        else{
          title.html("Version &#60;&#60;mobile&#62;&#62;");
        } 
      });
    }

    clickArrowAccordion(number){
      let arrow = $(`#arrow_button_${number}`);
      let accordion = $(`#accordion_${number}`)
      let header = $(`#header_accordion_${number}`);
      let content = $(`#main_accordion_${number}`);
  
      arrow.click(function() {
        accordion.toggleClass('accordionOpen');
        header.toggleClass( 'headerChangeColor' );
        content.toggleClass('showContentAccordion');
      });
    }
  }

  // Init variable
  let arrAcordion = [
    new ModelAccordion("Sasuke Uchiwa","../assets/sasuke.png", "Sasuke Uchiwa est un personnage du manga et des séries animés Naruto créé par Masashi Kishimoto. C'est un ninja du village de Konoha au caractère calme et détaché, conçu pour être à la fois le partenaire et le rival du personnage principal, Naruto Uzumaki."),
    new ModelAccordion("Itachi Uchiwa", "../assets/itachi.png", "Itachi Uchiwa est un personnage du manga Naruto. Frère aîné de Sasuke Uchiwa et excellent ninja de Konoha, il décima son clan pour défendre Konoha contre la rébellion des Uchiwa qui voulaient faire un coup d'état pour prendre le pouvoir.")
  ]
  let title = $('#title');
  (new Services()).changeTitleOnScreen();
  
  // Start 
  Object.entries(arrAcordion).forEach(([number, accordion]) => {
    (new Components()).accordion(number,accordion)
  });


});