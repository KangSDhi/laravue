<template>
    <div>
        <bookable-list-item 
            v-bind:item-title="bookable1.title" 
            v-bind:item-content="bookable1.content" 
            v-bind:price="1000">
        </bookable-list-item>
        <bookable-list-item 
            :item-title="bookable2.title" 
            :item-content="bookable2.content"
            :price="1500">
        </bookable-list-item>
        <bookable-list-item 
            :item-title="bookable3.title" 
            :item-content="bookable3.content"
            :price="1500">
        </bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
    components: {
        BookableListItem
    },
    data(){
        return {
            bookable1: null,
            bookable2: null
        }
    },
    // beforeCreate(){
    //     console.log("before created");
    // },
    created(){
        console.log("created");
        console.log(this.bookable1);
        console.log(this.bookable2);

        setTimeout(() => {
            this.bookable1 = {
                title: "Cheap Villa !!!",
                content: "A very cheap villa"
            };
            this.bookable2 = {
                title: "Cheap Villa 2",
                content: "A very cheap villa 2"
            };
            this.bookable3 = {
                title: "Expensive Villa 3",
                content: "A very expensive villa 3"
            };
        }, 5000);

        setTimeout(() => {
            console.log("First Change");
            this.bookable1.title = "You Will See This!";
        }, 8000);

        setTimeout(() => {
            console.log("Second Change");
            this.bookable3.title = "You wont see this!";
        }, 12000);
    },
    // beforeMount(){
    //     console.log("before mounted");
    // },
    // mounted(){
    //     console.log("mounted");
    // },
    // beforeDestroy(){
    //     console.log("before destroy");
    // },
    // destroyed(){
    //     console.log("destroyed");
    // }
}
</script>