<template>
    <v-menu>
        <template v-slot:activator="{ on }">
            <v-app-bar-nav-icon v-on="on"></v-app-bar-nav-icon>
        </template>
        <v-list>
            <v-list-item v-for="(item, index) in items" :key="index" :to="item.link">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-menu>
</template>


<script>
export default {
    name: 'NavList',
        data: () => ({
            items: [
                { title: 'home', link: '/' },
                { title: 'Signin', link: '/signin' },
            ],
        }),
};
</script>
