<template>
    <div>
        <bookable-list-item 
            item-title="Cheap Villa 1" 
            item-content="Very Cheap Villa" 
            v-bind:price="1000">
        </bookable-list-item>
        <bookable-list-item 
            item-title="Cheap Villa 2" 
            item-content="Very Cheap Villa 2"
            :price="1500">
        </bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
    components: {
        BookableListItem
    }    
}
</script>