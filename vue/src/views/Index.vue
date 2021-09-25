<template>
    <v-container>
        <v-row>

            <v-col
                cols="12"
            >
            <v-text-field
                class="mt-5"
                label="検索"
                outlined
                v-model="search"
            ></v-text-field>
            </v-col>

            {{this.data}}

        </v-row>
    </v-container>
</template>

<script>

import axios from 'axios';
    export default {
        name: 'Index',
        data: () => ({
            search: '',
            data: [],
        }),
        watch: {
            search(){
                axios.post('/api/food', {
                    keyword: this.search,
                })
                .then(function (res) {
                    this.data = res;
                })
                .catch(function (error) {
                    console.log(error);
                });
                if(this.search == '肉'){
                    this.data = '野菜';
                }
                
            }
        }
    }
</script>
