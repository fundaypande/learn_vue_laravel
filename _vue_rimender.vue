
# RULE
Karena berdasarkan javascript, penampilan array bertingkat menggunakan point (.)

1. Bind image data to html
    <img v-bind:src="image" />
    bisa juga hanya pakai titik 2
    <img :src="image" />

    <script>
    var app = new Vue({
    el: '#app',
    data: {
        product: 'Socks',
        image: 'https://www.vuemastery.com/images/challenges/vmSocks-blue.jpg'
    }
    })
    </script>

2. Conditional Logic Vue
    <p v-if="inStock">In Stock</p>
    <p v-else>Out of Stock</p>
    Dimana variable 'inStock':
    <script>
    var app = new Vue({
    el: '#app',
    data: {
        product: 'Socks',
        image: 'https://www.vuemastery.com/images/challenges/vmSocks-blue.jpg',
        inStock: true
    }
    })
    </script>
    Atau menggunakan third else if
    <p v-if="inStock > 10">In Stock</p>
    <p v-else-if="inStock > 5 && inStock < 10">Almost Lost</p>
    <p v-else>Out of Stock</p>

3. Menampilkan list
    List yang digunakan adalah array bertingkat
    <div v-for="variant in variants" :key="variant.variantId">
    <p>{{ variant.variantColor }}</p>
    </div>

4. Event
    <button v-on:click="addToCart">Add to cart</button>
    <div v-for="variant in variants" :key="variant.variantId">
        <p @mouseover="updateProduct(variant.variantImage)">{{ variant.variantColor }}</p>
    </div>
    <script>
    // merubah gambar ketika variant warna di hover
    methods: {
        addToCart() {
            this.cart += 1
        },
        updateProduct(variantImage) {
            this.image = variantImage
        }
    }
    </script>

5. Class and Style Binding
    // Menampilkan box color yang stylenya diatur dari data.
    // Kemudian karena v-for maka div tersebut dibuat sebanyak berapa data yang ada
    // Kemudian karena @mouseover setiap di hover akan memanggil method updateProduct yang merubah gambar
    <div class="color-box"
        v-for="variant in variants"
        :key="variant.variantId"
        :style="{ backgroundColor: variant.variantColor }"
        @mouseover="updateProduct(variant.variantImage)"
        >
    </div>

    // Mengisi class ketika kondisi tertentu terpenuhi
    // :class dapat ditambahkan 'disabledButton' dengan syarat variabel inStock harus false
    <button v-on:click="addToCart"
        :disabled="!inStock"
        :class="{ disabledButton: !inStock }"
        >
        Add to cart
    </button>

6. Computed Properties
    // Mirip seperti _contractor
    // Akan dijalankan terlebih dahulu



