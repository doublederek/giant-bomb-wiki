<template>
    <button>{{ label }}</button>
  </template>
  
  <script>
  export default {
    name: 'VueButton',
    props: {
      label: String,
    }
  };
  </script>