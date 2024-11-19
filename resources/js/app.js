// Importa Bootstrap
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

// Importa FontAwesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { faBank, faBuilding, faPencil, faPhone, faPlus, faTag, faTrash, faUser } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome"; // Asegúrate de importar correctamente

// Importa Vue y el componente principal
import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

// Agrega los iconos a la librería de FontAwesome
library.add(faPhone, faUser, faTrash, faPencil, faTag, faBuilding, faBank, faPlus);

// Crea la aplicación de Vue
createApp(App)
  .component("font-awesome-icon", FontAwesomeIcon) // Corregido el nombre del componente
  .use(router)
  .mount("#app");
