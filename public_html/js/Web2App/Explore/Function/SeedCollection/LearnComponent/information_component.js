export var Information = Vue.component
(
    "Information", 
    {
        props: ["data"], 
        computed: 
        {
            ItemArray: function()
            {
                return this.data!=undefined? this.data.trim().split("\n"):[]; 
            }
        },
        template:
        `
            <ul class="list-group">
                <ListItem
                    v-for="item in ItemArray"
                    :value="item"
                >
                </ListItem>
            </ul>
        `
    }
); 