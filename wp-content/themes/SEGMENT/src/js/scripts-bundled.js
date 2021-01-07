import { headerController } from "./modules/headerController";
import { clientsSwiper } from "./modules/swiper";
import { navController } from "./modules/navController";
import { licensesSliderController } from "./modules/licensesSliderController";
import { teamController } from "@/js/modules/teamController";
import { headerTabs } from "@/js/modules/headerTabs";

function init() {
    headerController();
    navController();
    licensesSliderController();
    teamController();
    headerTabs();
}

init()