/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'nganu': ['OpenSans-Light','OpenSans-Regular', 'OpenSans-Medium', 'OpenSans-SemiBold', 'OpenSans-Bold'],
      'yeseva': ['YesevaOne-Regular'],
    }, 
    extend: {},
  },
  plugins: [],
}