import * as learn_component from "./SeedCollection/learn_component.js"; 
import * as term_condition_component from "./SeedCollection/term_condition_component.js"; 
import * as take_picture_component from "./SeedCollection/take_picture_component.js"; 
import * as congratuations_component from "./SeedCollection/congratuations_component.js"; 

window.term_condition_store_track = term_condition_component.CreateStoreTrack();

window.seed_collection = new Vue 
(
    {
        el: "#seed_collection", 
        data: 
        {
            show: false, 
            menu: ["Collect","Store"], 
            db_top_key: "", 
            db_key_title: 
            {
                "": "Collection and Storage", 
                "tips_": "Tips", 
                "term_condition": "",
                "congratuations": "CONGRATUATIONS!"
            },
            class_lists: 
            {
                "LearnComponent": "common-popup main-components learn-term-components learn-component", 
                "TermConditionComponent": "common-popup main-components learn-term-components term-component",
                "TakePictureComponent": "common-popup main-components picture-component", 
                "CongratulationsComponent": "common-popup congrat-component"

            }, 
            current_component: "LearnComponent", 
            tree: {}
        },
        watch: 
        {
            tree()
            {
                try 
                {
                    this.db_key_title["term_condition"] = "Warning before collecting " + this.tree.name + " cones!"; 
                }
                catch
                {
                    this.db_key_title["term_condition"] = ""; 
                }
            }    
        },
    }
); 