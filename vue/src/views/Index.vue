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

        </v-row>
        <v-row>
            <v-card v-for="(food, i) in this.data" :key="i">
                <v-col cols="12" class="mx-5 my-3">
            
                    <v-card-title>
                        {{food.name}}
                    </v-card-title>
                    <v-card-text>
                        {{food.image}}
                    </v-card-text>

                </v-col>
            
            </v-card>
        </v-row>
    </v-container>
</template>

<script>

// import axios from 'axios';
    export default {
        name: 'Index',
        data: () => ({
            search: '',
            data: [],
        }),
        watch: {
            search(){
                console.log(this.data)
                // axios.post('/api/food', {
                //     keyword: this.search,
                // })
                // .then(function (res) {
                //     this.data = res;
                // })
                // .catch(function (error) {
                //     console.log(error);
                // });
                if(this.search == '肉'){
                    this.data = [
                        {
                            name: '野菜',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },
                    ];
                }
                if(this.search == '魚'){
                    this.data = [
                        {
                            name: '味噌汁',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },{
                            name: '野菜',
                            image: 'test.png',
                        },
                    ];
                }
                
            }
        }
    }
</script>
