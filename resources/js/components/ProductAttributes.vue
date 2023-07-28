

<template>
  <div>
    <h1>Product Attributes</h1>
    <ul>
      <li v-for="product in products" :key="product.id">
        <h3>{{ product.name }}</h3>
        <p>Description: {{ product.description }}</p>
        <p>Price: {{ product.price }}</p>
        <ul>
          <li v-for="attribute in product.attributes" :key="attribute.id">
            <strong>{{ attribute.attribute.name }}</strong>: {{ attribute.value.value }}
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [],
    };
  },
  mounted() {
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      // Make an API call to fetch products with their attributes and attribute values
      axios.get('/api/products')
        .then(response => {
          this.products = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    }
  },
};
</script>
