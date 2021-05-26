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
            bookable1: {
                title: "Villa 1",
                content: "Cheap"
            },
            bookable2: {
                title: "Villa 2",
                content: "Expensive"
            }
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
            this.bookable1.title = "Expensive villa";
            this.bookable2.title = "Very Expensive villa";
        }, 5000);
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