<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                <div class="form-group">
                <label for="category_id">
                Category
                </label>
                <select v-model="category" name="category_id"  class="form-control" @change="loadSubCategories">
                <option value="">Select Category</option>
                <option v-for="category in categories" :value="category.id">{{category.name}}</option>
                </select>
                </div>

                
                <div class="form-group">
                <label for="sub_category_id">
                Category
                </label>
                <select v-model="subcategory" name="sub_category_id" id="sub_category_id" class="form-control">

                <option value="">Select Sub Category</option>
                     <option v-for="subcategory in subcategories" :value="category.id">{{subcategory.name}}</option>
                
                </select>
                </div>


                <div class="form-group">
               <button class="btn-primary">Save</button>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()
        {
            return{
                categories: [],
                subcategories: [],
                category: '',
                subcategory: ''
            }
        },
        mounted() {
            this.loadCategories()
        },

        methods: {
            loadCategories(){
                axios.get('/api/categories')
                .then(response => this.categories = response.data)
                .catch(error => console.log(error))
            },
             loadSubCategories(){
                axios.get(`/api/subcategories/${this.category}`)
                .then(response => this.subcategories = response.data)
                .catch(error => console.log(error))
            }
        }
    }
</script>
