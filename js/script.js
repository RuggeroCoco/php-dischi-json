const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
    };
  },
  mounted() {
    this.getDisks();
  },
  methods: {
    getDisks() {
      axios
        .get("http://localhost/Boolean-progetti/php-dischi-json/server.php")
        .then((resp) => {
          this.disks = resp.data.results;
          console.log(resp);
        });
    },
  },
}).mount("#app");
