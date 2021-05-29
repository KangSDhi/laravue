<template>
    <div>
        <div v-if="loading">
            Data is loading ...
        </div>
        <div v-else>
            <bookable-list-item 
                v-bind:item-title="bookable.title" 
                v-bind:item-content="bookable.content" 
                v-bind:price="1000"
                v-for="(bookable, index) in bookables"
                :key="index">
        </bookable-list-item>
        </div>
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
            bookables: null,
            loading: false
        }
    },
    created(){
        this.loading = true;
        setTimeout(() => {
            this.bookables = [
                {
                    id: 1,
                    title: "Cheap Villa !!!",
                    content: "A very cheap villa"
                },
                {
                    id: 2,
                    title: "Cheap Villa 2",
                    content: "A very cheap villa 2"
                }
            ];
            this.loading = false;
        }, 2000);

    },
}
</script>