new Vue({
  el: "#app",
  data: {
    title: "Notemaster",
    note: {
      title: "",
      text: "",
      date: new Date(Date.now()).toLocaleString()
    },
    notes: [
    ]
  },
  methods: {
    addNote() {
      let { text, title } = this.note;
      this.notes.push({
        text,
        title,
        date: new Date(Date.now()).toLocaleString()
      });
    },
    removeNote(index) {
      this.notes.splice(index, 1)
    }
  }
});
