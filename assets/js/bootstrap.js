import { Application } from "@hotwired/stimulus";
import PaycheckController from "./controllers/paycheck_controller";

window.Stimulus = Application.start()
Stimulus.register("paycheck", PaycheckController );
