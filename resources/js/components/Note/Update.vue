<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Update data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="addData()">
          <div class="form-group">
            <label>Title</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input the note title"
              v-model="form.title"
              required
            >
          </div>
          <div class="form-group">
            <label>Note</label>
            <textarea
              type="textfield"
              class="form-control"
              placeholder="Note description"
              v-model="form.note"
              required
            >
            </textarea>
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      form:{
        title: '',
        note: ''
      }
    }
  },
  created() {
      this.getData();
  },
  methods: {
    addData() {
      // post data ke api menggunakan axios
      axios
        .put("http://localhost:8000/api/note/" + this.$route.params.id, {
          title: this.form.title,
          note: this.form.note
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    },
    getData(){
        // fetch data dari api menggunakan axios
        axios.get("http://localhost:8000/api/note/" + this.$route.params.id).then(response => {
            // mengirim data hasil fetch ke varibale array persons
            this.form.title = response.data.title;
            this.form.note = response.data.note;
        });
    }

  }
};
</script>
