<template>
    <v-container>
        <v-row>

            <v-col
                cols="12"
            >
            <v-text-field
                class="mt-3"
                label="検索"
                outlined
                v-model="search"
            ></v-text-field>
            </v-col>

        </v-row>
        <v-row class="card">
            <v-col cols="6" md="4" v-for="(food, i) in this.data" :key="i">
                <v-card>
                    <v-card-title>
                        <v-img :src="food.image" />
                        {{food.name}}
                    </v-card-title>
                </v-card>
            </v-col>
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
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                    ];
                }else if(this.search == '魚'){
                    this.data = [
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                        {
                            name: '野菜',
                            image: 'https://3.bp.blogspot.com/-v3bUhbtBi1Y/UUFxxbikL-I/AAAAAAAAO1A/vqZw9bYuabY/s500/vegetable.png',
                        },
                    ];
                }else{
                    this.data = []
                }
                
            }
        }
    }
</script>

<style>
.card{
    display: flex;
    justify-content: space-evenly;
    justify-content: left;
}
</style>