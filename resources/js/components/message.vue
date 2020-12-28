<template>
    <div>

        <li class="list-group-item" :class="className">
<!--            <small class="badge float-right">{{ user }}</small>-->
            <slot></slot>
            <small class="badge float-right">{{ time }}</small>
        </li>
        <small class="badge float-right badge-primary" style="margin-bottom: 10px;">{{ user }}</small>


    </div>
</template>

<script>
    export default {
        props : [
            'color',
            'user',
            'time'
        ],
        computed : {
          className () {
              return 'list-group-item-'+this.color;
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
