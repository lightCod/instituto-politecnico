<!doctype html>
    <head>
            <style>
                @charset "UTF-8";
:root {
  --blue: #467fcf;
  --indigo: #6574cd;
  --purple: #a55eea;
  --pink: #f66d9b;
  --red: #cd201f;
  --orange: #fd9644;
  --yellow: #f1c40f;
  --green: #5eba00;
  --teal: #2bcbba;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #868e96;
  --gray-dark: #343a40;
  --azure: #45aaf2;
  --lime: #7bd235;
  --primary: #467fcf;
  --secondary: #868e96;
  --success: #5eba00;
  --info: #45aaf2;
  --warning: #f1c40f;
  --danger: #cd201f;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1280px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: left;
  background-color: #f5f7fb;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.66em;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #467fcf;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #295a9f;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #9aa0ac;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.66em;
  font-family: inherit;
  font-weight: 600;
  line-height: 1.1;
  color: inherit;
}

h1, .h1 {
  font-size: 2rem;
}

h2, .h2 {
  font-size: 1.75rem;
}

h3, .h3 {
  font-size: 1.5rem;
}

h4, .h4 {
  font-size: 1.125rem;
}

h5, .h5 {
  font-size: 1rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

.lead {
  font-size: 1.171875rem;
  font-weight: 300;
}

.display-1 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.1;
}

.display-2 {
  font-size: 4rem;
  font-weight: 300;
  line-height: 1.1;
}

.display-3 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.1;
}

.display-4 {
  font-size: 3rem;
  font-weight: 300;
  line-height: 1.1;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

small,
.small {
  font-size: 87.5%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.171875rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #868e96;
}

.blockquote-footer::before {
  content: "\2014 \00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 3px;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #868e96;
}

code,
kbd,
pre,
samp {
  font-family: Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

code {
  font-size: 85%;
  color: inherit;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 85%;
  color: #fff;
  background-color: #343a40;
  border-radius: 3px;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 85%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 0.75rem;
  padding-left: 0.75rem;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1200px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 0.75rem;
  padding-left: 0.75rem;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -0.75rem;
  margin-left: -0.75rem;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -ms-flex: 0 0 8.33333333%;
  flex: 0 0 8.33333333%;
  max-width: 8.33333333%;
}

.col-2 {
  -ms-flex: 0 0 16.66666667%;
  flex: 0 0 16.66666667%;
  max-width: 16.66666667%;
}

.col-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -ms-flex: 0 0 33.33333333%;
  flex: 0 0 33.33333333%;
  max-width: 33.33333333%;
}

.col-5 {
  -ms-flex: 0 0 41.66666667%;
  flex: 0 0 41.66666667%;
  max-width: 41.66666667%;
}

.col-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -ms-flex: 0 0 58.33333333%;
  flex: 0 0 58.33333333%;
  max-width: 58.33333333%;
}

.col-8 {
  -ms-flex: 0 0 66.66666667%;
  flex: 0 0 66.66666667%;
  max-width: 66.66666667%;
}

.col-9 {
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -ms-flex: 0 0 83.33333333%;
  flex: 0 0 83.33333333%;
  max-width: 83.33333333%;
}

.col-11 {
  -ms-flex: 0 0 91.66666667%;
  flex: 0 0 91.66666667%;
  max-width: 91.66666667%;
}

.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -ms-flex: 0 0 8.33333333%;
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 16.66666667%;
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 33.33333333%;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 41.66666667%;
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 58.33333333%;
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 66.66666667%;
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 83.33333333%;
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 91.66666667%;
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -ms-flex: 0 0 8.33333333%;
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 16.66666667%;
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 33.33333333%;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 41.66666667%;
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 58.33333333%;
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.66666667%;
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 83.33333333%;
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 91.66666667%;
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -ms-flex: 0 0 8.33333333%;
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 16.66666667%;
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 33.33333333%;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 41.66666667%;
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 58.33333333%;
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 66.66666667%;
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 83.33333333%;
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 91.66666667%;
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
}

@media (min-width: 1280px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -ms-flex: 0 0 8.33333333%;
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 16.66666667%;
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 33.33333333%;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 41.66666667%;
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 58.33333333%;
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 66.66666667%;
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 83.33333333%;
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 91.66666667%;
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
}

.table, .text-wrap table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th, .text-wrap table th,
.table td,
.text-wrap table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th, .text-wrap table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody, .text-wrap table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table, .text-wrap table .table, .table .text-wrap table, .text-wrap .table table, .text-wrap table table {
  background-color: #f5f7fb;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered, .text-wrap table {
  border: 1px solid #dee2e6;
}

.table-bordered th, .text-wrap table th,
.table-bordered td,
.text-wrap table td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th, .text-wrap table thead th,
.table-bordered thead td,
.text-wrap table thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.02);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.04);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #cbdbf2;
}

.table-hover .table-primary:hover {
  background-color: #b7cded;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #b7cded;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #dddfe2;
}

.table-hover .table-secondary:hover {
  background-color: #cfd2d6;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #cfd2d6;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #d2ecb8;
}

.table-hover .table-success:hover {
  background-color: #c5e7a4;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #c5e7a4;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #cbe7fb;
}

.table-hover .table-info:hover {
  background-color: #b3dcf9;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #b3dcf9;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fbeebc;
}

.table-hover .table-warning:hover {
  background-color: #fae8a4;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #fae8a4;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f1c1c0;
}

.table-hover .table-danger:hover {
  background-color: #ecacab;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #ecacab;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.04);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.04);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.04);
}

.table .thead-dark th, .text-wrap table .thead-dark th {
  color: #f5f7fb;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th, .text-wrap table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #f5f7fb;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered, .text-wrap table.table-dark {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered, .text-wrap .table-responsive-sm > table {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered, .text-wrap .table-responsive-md > table {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered, .text-wrap .table-responsive-lg > table {
    border: 0;
  }
}

@media (max-width: 1279.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered, .text-wrap .table-responsive-xl > table {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive > .table-bordered, .text-wrap .table-responsive > table {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 0.9375rem;
  line-height: 1.6;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #1991eb;
  outline: 0;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control::placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #f8f9fa;
  opacity: 1;
}

select.form-control:not([size]):not([multiple]) {
  height: 2.375rem;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.6;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.125rem;
  line-height: 1.44444444;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.14285714;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.6;
  color: #495057;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
.input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
.input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
.input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
.input-group-lg > .input-group-append > .form-control-plaintext.btn {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.14285714;
  border-radius: 3px;
}

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(1.8125rem + 2px);
}

.form-control-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.125rem;
  line-height: 1.44444444;
  border-radius: 3px;
}

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(2.6875rem + 2px);
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #9aa0ac;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 87.5%;
  color: #5eba00;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(94, 186, 0, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #5eba00;
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
.custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #5eba00;
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip, .was-validated
.custom-select:valid ~ .valid-feedback,
.was-validated
.custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #5eba00;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #5eba00;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  background-color: #9eff3b;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #78ed00;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #5eba00;
}

.was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 87.5%;
  color: #cd201f;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(205, 32, 31, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #cd201f;
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
.custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #cd201f;
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip, .was-validated
.custom-select:invalid ~ .invalid-feedback,
.was-validated
.custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #cd201f;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #cd201f;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  background-color: #ec8080;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e23e3d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #cd201f;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-align: center;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.9375rem;
  line-height: 1.84615385;
  border-radius: 3px;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover, .btn:focus {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
  background-image: none;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-primary:hover {
  color: #fff;
  background-color: #316cbe;
  border-color: #2f66b3;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #2f66b3;
  border-color: #2c60a9;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #727b84;
  border-color: #6c757d;
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #666e76;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-success:hover {
  color: #fff;
  background-color: #4b9400;
  border-color: #448700;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #448700;
  border-color: #3e7a00;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-info:hover {
  color: #fff;
  background-color: #219af0;
  border-color: #1594ef;
}

.btn-info:focus, .btn-info.focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #1594ef;
  border-color: #108ee7;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-warning {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-warning:hover {
  color: #fff;
  background-color: #cea70c;
  border-color: #c29d0b;
}

.btn-warning:focus, .btn-warning.focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #c29d0b;
  border-color: #b6940b;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-danger:hover {
  color: #fff;
  background-color: #ac1b1a;
  border-color: #a11918;
}

.btn-danger:focus, .btn-danger.focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #a11918;
  border-color: #961717;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-light {
  color: #495057;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #495057;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #495057;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #495057;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-outline-primary {
  color: #467fcf;
  background-color: transparent;
  background-image: none;
  border-color: #467fcf;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #467fcf;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-outline-secondary {
  color: #868e96;
  background-color: transparent;
  background-image: none;
  border-color: #868e96;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #868e96;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-outline-success {
  color: #5eba00;
  background-color: transparent;
  background-image: none;
  border-color: #5eba00;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #5eba00;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-outline-info {
  color: #45aaf2;
  background-color: transparent;
  background-image: none;
  border-color: #45aaf2;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #45aaf2;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-outline-warning {
  color: #f1c40f;
  background-color: transparent;
  background-image: none;
  border-color: #f1c40f;
}

.btn-outline-warning:hover {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #f1c40f;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-outline-danger {
  color: #cd201f;
  background-color: transparent;
  background-image: none;
  border-color: #cd201f;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #cd201f;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #495057;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #495057;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #467fcf;
  background-color: transparent;
}

.btn-link:hover {
  color: #295a9f;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #868e96;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.125rem;
  line-height: 1.625;
  border-radius: 3px;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.33333333;
  border-radius: 3px;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media screen and (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 0.9375rem;
  color: #495057;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #467fcf;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #868e96;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #868e96;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .btn-group + .btn-group {
  margin-left: -1px;
}

.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:first-child {
  margin-left: 0;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: center;
  justify-content: center;
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file:focus {
  z-index: 3;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label,
.input-group > .custom-file:not(:first-child) .custom-file-label::after {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.6;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #fbfbfc;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  background-color: #467fcf;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-control-input:active ~ .custom-control-label::before {
  color: #fff;
  background-color: #d4e1f4;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #868e96;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  margin-bottom: 0;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #dee2e6;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 3px;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #467fcf;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #467fcf;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(70, 127, 207, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(70, 127, 207, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #467fcf;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(70, 127, 207, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: 2.375rem;
  padding: 0.5rem 1.75rem 0.5rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 5'%3E%3Cpath fill='#999' d='M0 0L10 0L5 5L0 0'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #1991eb;
  outline: 0;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(25, 145, 235, 0.5);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #868e96;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  opacity: 0;
}

.custom-select-sm {
  height: calc(1.8125rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  font-size: 75%;
}

.custom-select-lg {
  height: calc(2.6875rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  font-size: 125%;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 2.375rem;
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 2.375rem;
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #1991eb;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-file-input:focus ~ .custom-file-label::after {
  border-color: #1991eb;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(2.375rem - 1px * 2);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #fbfbfc;
  border-left: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 0 3px 3px 0;
}

.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #467fcf;
  border: 0;
  border-radius: 1rem;
  -webkit-appearance: none;
  appearance: none;
}

.custom-range::-webkit-slider-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #d4e1f4;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #467fcf;
  border: 0;
  border-radius: 1rem;
  -moz-appearance: none;
  appearance: none;
}

.custom-range::-moz-range-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-range::-moz-range-thumb:active {
  background-color: #d4e1f4;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #467fcf;
  border: 0;
  border-radius: 1rem;
  appearance: none;
}

.custom-range::-ms-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #f5f7fb, 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-range::-ms-thumb:active {
  background-color: #d4e1f4;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #868e96;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #868e96;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: transparent;
  border-color: #dee2e6 #dee2e6 transparent;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 3px;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #467fcf;
}

.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.359375rem;
  padding-bottom: 0.359375rem;
  margin-right: 1rem;
  font-size: 1.125rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.125rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 3px;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1279.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1280px) {
  .navbar-expand-xl {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.5rem;
}

.card-title {
  margin-bottom: 1.5rem;
}

.card-subtitle {
  margin-top: -0.75rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.5rem;
}

.card-header {
  padding: 1.5rem 1.5rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 40, 100, 0.12);
}

.card-header:first-child {
  border-radius: calc(3px - 1px) calc(3px - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 1.5rem 1.5rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.card-footer:last-child {
  border-radius: 0 0 calc(3px - 1px) calc(3px - 1px);
}

.card-header-tabs {
  margin-right: -0.75rem;
  margin-bottom: -1.5rem;
  margin-left: -0.75rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.75rem;
  margin-left: -0.75rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(3px - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(3px - 1px);
  border-top-right-radius: calc(3px - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(3px - 1px);
  border-bottom-left-radius: calc(3px - 1px);
}

.card-deck {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-deck {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .card-deck .card {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-right: 0.75rem;
    margin-bottom: 0;
    margin-left: 0.75rem;
  }
}

.card-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-group {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 3px;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 1.5rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 3px;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #868e96;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #868e96;
}

.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 3px;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #495057;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #295a9f;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.page-item:last-child .page-link {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.page-item.disabled .page-link {
  color: #ced4da;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.125rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 600;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 3px;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #467fcf;
}

.badge-primary[href]:hover, .badge-primary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #2f66b3;
}

.badge-secondary {
  color: #fff;
  background-color: #868e96;
}

.badge-secondary[href]:hover, .badge-secondary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #6c757d;
}

.badge-success {
  color: #fff;
  background-color: #5eba00;
}

.badge-success[href]:hover, .badge-success[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #448700;
}

.badge-info {
  color: #fff;
  background-color: #45aaf2;
}

.badge-info[href]:hover, .badge-info[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1594ef;
}

.badge-warning {
  color: #fff;
  background-color: #f1c40f;
}

.badge-warning[href]:hover, .badge-warning[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #c29d0b;
}

.badge-danger {
  color: #fff;
  background-color: #cd201f;
}

.badge-danger[href]:hover, .badge-danger[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #a11918;
}

.badge-light {
  color: #495057;
  background-color: #f8f9fa;
}

.badge-light[href]:hover, .badge-light[href]:focus {
  color: #495057;
  text-decoration: none;
  background-color: #dae0e5;
}

.badge-dark {
  color: #fff;
  background-color: #343a40;
}

.badge-dark[href]:hover, .badge-dark[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1d2124;
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 3px;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 3px;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 600;
}

.alert-dismissible {
  padding-right: 3.90625rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #24426c;
  background-color: #dae5f5;
  border-color: #cbdbf2;
}

.alert-primary hr {
  border-top-color: #b7cded;
}

.alert-primary .alert-link {
  color: #172b46;
}

.alert-secondary {
  color: #464a4e;
  background-color: #e7e8ea;
  border-color: #dddfe2;
}

.alert-secondary hr {
  border-top-color: #cfd2d6;
}

.alert-secondary .alert-link {
  color: #2e3133;
}

.alert-success {
  color: #316100;
  background-color: #dff1cc;
  border-color: #d2ecb8;
}

.alert-success hr {
  border-top-color: #c5e7a4;
}

.alert-success .alert-link {
  color: #172e00;
}

.alert-info {
  color: #24587e;
  background-color: #daeefc;
  border-color: #cbe7fb;
}

.alert-info hr {
  border-top-color: #b3dcf9;
}

.alert-info .alert-link {
  color: #193c56;
}

.alert-warning {
  color: #7d6608;
  background-color: #fcf3cf;
  border-color: #fbeebc;
}

.alert-warning hr {
  border-top-color: #fae8a4;
}

.alert-warning .alert-link {
  color: #4d3f05;
}

.alert-danger {
  color: #6b1110;
  background-color: #f5d2d2;
  border-color: #f1c1c0;
}

.alert-danger hr {
  border-top-color: #ecacab;
}

.alert-danger .alert-link {
  color: #3f0a09;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.703125rem;
  background-color: #e9ecef;
  border-radius: 3px;
}

.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #467fcf;
  transition: width 0.6s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}

.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -ms-flex: 1;
  flex: 1;
}

.list-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #495057;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 40, 100, 0.12);
}

.list-group-item:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.list-group-item:hover, .list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #868e96;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #467fcf;
  background-color: #f8fafd;
  border-color: rgba(0, 40, 100, 0.12);
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}

.list-group-item-primary {
  color: #24426c;
  background-color: #cbdbf2;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #24426c;
  background-color: #b7cded;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #24426c;
  border-color: #24426c;
}

.list-group-item-secondary {
  color: #464a4e;
  background-color: #dddfe2;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #464a4e;
  background-color: #cfd2d6;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #464a4e;
  border-color: #464a4e;
}

.list-group-item-success {
  color: #316100;
  background-color: #d2ecb8;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #316100;
  background-color: #c5e7a4;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #316100;
  border-color: #316100;
}

.list-group-item-info {
  color: #24587e;
  background-color: #cbe7fb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #24587e;
  background-color: #b3dcf9;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #24587e;
  border-color: #24587e;
}

.list-group-item-warning {
  color: #7d6608;
  background-color: #fbeebc;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #7d6608;
  background-color: #fae8a4;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #7d6608;
  border-color: #7d6608;
}

.list-group-item-danger {
  color: #6b1110;
  background-color: #f1c1c0;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #6b1110;
  background-color: #ecacab;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #6b1110;
  border-color: #6b1110;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.40625rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover, .close:focus {
  color: #000;
  text-decoration: none;
  opacity: .75;
}

.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}

.modal-open {
  overflow: hidden;
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
  transform: translate(0, -25%);
}

@media screen and (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 3px;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #dee3eb;
  border-radius: 3px;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 0.5rem;
  height: 0.5rem;
  margin: 0 3px;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.25rem 0;
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: #dee3eb;
}


.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 0.5rem;
  margin: 3px 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.25rem 0.5rem 0.25rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: #dee3eb;
}


.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.25rem 0.5rem 0.25rem;
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: #dee3eb;
}


.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 0.5rem;
  margin-left: -0.25rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 0.5rem;
  margin: 3px 0;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.25rem 0 0.25rem 0.5rem;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: #dee3eb;
}


.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(3px - 1px);
  border-top-right-radius: calc(3px - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.75rem 1rem;
  color: #6e7687;
}

.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-item {
  position: relative;
  display: none;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  transition: -webkit-transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000px;
  perspective: 1000px;
}

@media screen and (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next,
  .active.carousel-item-right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-prev,
  .active.carousel-item-left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-duration: .6s;
  transition-property: opacity;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-fade .carousel-item-next,
  .carousel-fade .carousel-item-prev,
  .carousel-fade .carousel-item.active,
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-prev {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: .9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  position: relative;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators .active {
  background-color: #fff;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #467fcf !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #2f66b3 !important;
}

.bg-secondary {
  background-color: #868e96 !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #6c757d !important;
}

.bg-success {
  background-color: #5eba00 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #448700 !important;
}

.bg-info {
  background-color: #45aaf2 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #1594ef !important;
}

.bg-warning {
  background-color: #f1c40f !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #c29d0b !important;
}

.bg-danger {
  background-color: #cd201f !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #a11918 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid rgba(0, 40, 100, 0.12) !important;
}

.border-top {
  border-top: 1px solid rgba(0, 40, 100, 0.12) !important;
}

.border-right {
  border-right: 1px solid rgba(0, 40, 100, 0.12) !important;
}

.border-bottom {
  border-bottom: 1px solid rgba(0, 40, 100, 0.12) !important;
}

.border-left {
  border-left: 1px solid rgba(0, 40, 100, 0.12) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #467fcf !important;
}

.border-secondary {
  border-color: #868e96 !important;
}

.border-success {
  border-color: #5eba00 !important;
}

.border-info {
  border-color: #45aaf2 !important;
}

.border-warning {
  border-color: #f1c40f !important;
}

.border-danger {
  border-color: #cd201f !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded {
  border-radius: 3px !important;
}

.rounded-top {
  border-top-left-radius: 3px !important;
  border-top-right-radius: 3px !important;
}

.rounded-right {
  border-top-right-radius: 3px !important;
  border-bottom-right-radius: 3px !important;
}

.rounded-bottom {
  border-bottom-right-radius: 3px !important;
  border-bottom-left-radius: 3px !important;
}

.rounded-left {
  border-top-left-radius: 3px !important;
  border-bottom-left-radius: 3px !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1280px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714286%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}

.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1280px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1280px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.w-0 {
  width: 0 !important;
}

.w-1 {
  width: 0.25rem !important;
}

.w-2 {
  width: 0.5rem !important;
}

.w-3 {
  width: 0.75rem !important;
}

.w-4 {
  width: 1rem !important;
}

.w-5 {
  width: 1.5rem !important;
}

.w-6 {
  width: 2rem !important;
}

.w-7 {
  width: 3rem !important;
}

.w-8 {
  width: 4rem !important;
}

.w-9 {
  width: 6rem !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.h-0 {
  height: 0 !important;
}

.h-1 {
  height: 0.25rem !important;
}

.h-2 {
  height: 0.5rem !important;
}

.h-3 {
  height: 0.75rem !important;
}

.h-4 {
  height: 1rem !important;
}

.h-5 {
  height: 1.5rem !important;
}

.h-6 {
  height: 2rem !important;
}

.h-7 {
  height: 3rem !important;
}

.h-8 {
  height: 4rem !important;
}

.h-9 {
  height: 6rem !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 0.75rem !important;
}

.mt-3,
.my-3 {
  margin-top: 0.75rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 0.75rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 0.75rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 0.75rem !important;
}

.m-4 {
  margin: 1rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1rem !important;
}

.m-5 {
  margin: 1.5rem !important;
}

.mt-5,
.my-5 {
  margin-top: 1.5rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 1.5rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 1.5rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 1.5rem !important;
}

.m-6 {
  margin: 2rem !important;
}

.mt-6,
.my-6 {
  margin-top: 2rem !important;
}

.mr-6,
.mx-6 {
  margin-right: 2rem !important;
}

.mb-6,
.my-6 {
  margin-bottom: 2rem !important;
}

.ml-6,
.mx-6 {
  margin-left: 2rem !important;
}

.m-7 {
  margin: 3rem !important;
}

.mt-7,
.my-7 {
  margin-top: 3rem !important;
}

.mr-7,
.mx-7 {
  margin-right: 3rem !important;
}

.mb-7,
.my-7 {
  margin-bottom: 3rem !important;
}

.ml-7,
.mx-7 {
  margin-left: 3rem !important;
}

.m-8 {
  margin: 4rem !important;
}

.mt-8,
.my-8 {
  margin-top: 4rem !important;
}

.mr-8,
.mx-8 {
  margin-right: 4rem !important;
}

.mb-8,
.my-8 {
  margin-bottom: 4rem !important;
}

.ml-8,
.mx-8 {
  margin-left: 4rem !important;
}

.m-9 {
  margin: 6rem !important;
}

.mt-9,
.my-9 {
  margin-top: 6rem !important;
}

.mr-9,
.mx-9 {
  margin-right: 6rem !important;
}

.mb-9,
.my-9 {
  margin-bottom: 6rem !important;
}

.ml-9,
.mx-9 {
  margin-left: 6rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 0.75rem !important;
}

.pt-3,
.py-3 {
  padding-top: 0.75rem !important;
}

.pr-3,
.px-3 {
  padding-right: 0.75rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 0.75rem !important;
}

.pl-3,
.px-3 {
  padding-left: 0.75rem !important;
}

.p-4 {
  padding: 1rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1rem !important;
}

.p-5 {
  padding: 1.5rem !important;
}

.pt-5,
.py-5 {
  padding-top: 1.5rem !important;
}

.pr-5,
.px-5 {
  padding-right: 1.5rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 1.5rem !important;
}

.pl-5,
.px-5 {
  padding-left: 1.5rem !important;
}

.p-6 {
  padding: 2rem !important;
}

.pt-6,
.py-6 {
  padding-top: 2rem !important;
}

.pr-6,
.px-6 {
  padding-right: 2rem !important;
}

.pb-6,
.py-6 {
  padding-bottom: 2rem !important;
}

.pl-6,
.px-6 {
  padding-left: 2rem !important;
}

.p-7 {
  padding: 3rem !important;
}

.pt-7,
.py-7 {
  padding-top: 3rem !important;
}

.pr-7,
.px-7 {
  padding-right: 3rem !important;
}

.pb-7,
.py-7 {
  padding-bottom: 3rem !important;
}

.pl-7,
.px-7 {
  padding-left: 3rem !important;
}

.p-8 {
  padding: 4rem !important;
}

.pt-8,
.py-8 {
  padding-top: 4rem !important;
}

.pr-8,
.px-8 {
  padding-right: 4rem !important;
}

.pb-8,
.py-8 {
  padding-bottom: 4rem !important;
}

.pl-8,
.px-8 {
  padding-left: 4rem !important;
}

.p-9 {
  padding: 6rem !important;
}

.pt-9,
.py-9 {
  padding-top: 6rem !important;
}

.pr-9,
.px-9 {
  padding-right: 6rem !important;
}

.pb-9,
.py-9 {
  padding-bottom: 6rem !important;
}

.pl-9,
.px-9 {
  padding-left: 6rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 0.75rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 0.75rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 0.75rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 0.75rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 0.75rem !important;
  }
  .m-sm-4 {
    margin: 1rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1rem !important;
  }
  .m-sm-5 {
    margin: 1.5rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 1.5rem !important;
  }
  .m-sm-6 {
    margin: 2rem !important;
  }
  .mt-sm-6,
  .my-sm-6 {
    margin-top: 2rem !important;
  }
  .mr-sm-6,
  .mx-sm-6 {
    margin-right: 2rem !important;
  }
  .mb-sm-6,
  .my-sm-6 {
    margin-bottom: 2rem !important;
  }
  .ml-sm-6,
  .mx-sm-6 {
    margin-left: 2rem !important;
  }
  .m-sm-7 {
    margin: 3rem !important;
  }
  .mt-sm-7,
  .my-sm-7 {
    margin-top: 3rem !important;
  }
  .mr-sm-7,
  .mx-sm-7 {
    margin-right: 3rem !important;
  }
  .mb-sm-7,
  .my-sm-7 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-7,
  .mx-sm-7 {
    margin-left: 3rem !important;
  }
  .m-sm-8 {
    margin: 4rem !important;
  }
  .mt-sm-8,
  .my-sm-8 {
    margin-top: 4rem !important;
  }
  .mr-sm-8,
  .mx-sm-8 {
    margin-right: 4rem !important;
  }
  .mb-sm-8,
  .my-sm-8 {
    margin-bottom: 4rem !important;
  }
  .ml-sm-8,
  .mx-sm-8 {
    margin-left: 4rem !important;
  }
  .m-sm-9 {
    margin: 6rem !important;
  }
  .mt-sm-9,
  .my-sm-9 {
    margin-top: 6rem !important;
  }
  .mr-sm-9,
  .mx-sm-9 {
    margin-right: 6rem !important;
  }
  .mb-sm-9,
  .my-sm-9 {
    margin-bottom: 6rem !important;
  }
  .ml-sm-9,
  .mx-sm-9 {
    margin-left: 6rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 0.75rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 0.75rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 0.75rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 0.75rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 0.75rem !important;
  }
  .p-sm-4 {
    padding: 1rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1rem !important;
  }
  .p-sm-5 {
    padding: 1.5rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 1.5rem !important;
  }
  .p-sm-6 {
    padding: 2rem !important;
  }
  .pt-sm-6,
  .py-sm-6 {
    padding-top: 2rem !important;
  }
  .pr-sm-6,
  .px-sm-6 {
    padding-right: 2rem !important;
  }
  .pb-sm-6,
  .py-sm-6 {
    padding-bottom: 2rem !important;
  }
  .pl-sm-6,
  .px-sm-6 {
    padding-left: 2rem !important;
  }
  .p-sm-7 {
    padding: 3rem !important;
  }
  .pt-sm-7,
  .py-sm-7 {
    padding-top: 3rem !important;
  }
  .pr-sm-7,
  .px-sm-7 {
    padding-right: 3rem !important;
  }
  .pb-sm-7,
  .py-sm-7 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-7,
  .px-sm-7 {
    padding-left: 3rem !important;
  }
  .p-sm-8 {
    padding: 4rem !important;
  }
  .pt-sm-8,
  .py-sm-8 {
    padding-top: 4rem !important;
  }
  .pr-sm-8,
  .px-sm-8 {
    padding-right: 4rem !important;
  }
  .pb-sm-8,
  .py-sm-8 {
    padding-bottom: 4rem !important;
  }
  .pl-sm-8,
  .px-sm-8 {
    padding-left: 4rem !important;
  }
  .p-sm-9 {
    padding: 6rem !important;
  }
  .pt-sm-9,
  .py-sm-9 {
    padding-top: 6rem !important;
  }
  .pr-sm-9,
  .px-sm-9 {
    padding-right: 6rem !important;
  }
  .pb-sm-9,
  .py-sm-9 {
    padding-bottom: 6rem !important;
  }
  .pl-sm-9,
  .px-sm-9 {
    padding-left: 6rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 0.75rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 0.75rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 0.75rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 0.75rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 0.75rem !important;
  }
  .m-md-4 {
    margin: 1rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1rem !important;
  }
  .m-md-5 {
    margin: 1.5rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 1.5rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 1.5rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 1.5rem !important;
  }
  .m-md-6 {
    margin: 2rem !important;
  }
  .mt-md-6,
  .my-md-6 {
    margin-top: 2rem !important;
  }
  .mr-md-6,
  .mx-md-6 {
    margin-right: 2rem !important;
  }
  .mb-md-6,
  .my-md-6 {
    margin-bottom: 2rem !important;
  }
  .ml-md-6,
  .mx-md-6 {
    margin-left: 2rem !important;
  }
  .m-md-7 {
    margin: 3rem !important;
  }
  .mt-md-7,
  .my-md-7 {
    margin-top: 3rem !important;
  }
  .mr-md-7,
  .mx-md-7 {
    margin-right: 3rem !important;
  }
  .mb-md-7,
  .my-md-7 {
    margin-bottom: 3rem !important;
  }
  .ml-md-7,
  .mx-md-7 {
    margin-left: 3rem !important;
  }
  .m-md-8 {
    margin: 4rem !important;
  }
  .mt-md-8,
  .my-md-8 {
    margin-top: 4rem !important;
  }
  .mr-md-8,
  .mx-md-8 {
    margin-right: 4rem !important;
  }
  .mb-md-8,
  .my-md-8 {
    margin-bottom: 4rem !important;
  }
  .ml-md-8,
  .mx-md-8 {
    margin-left: 4rem !important;
  }
  .m-md-9 {
    margin: 6rem !important;
  }
  .mt-md-9,
  .my-md-9 {
    margin-top: 6rem !important;
  }
  .mr-md-9,
  .mx-md-9 {
    margin-right: 6rem !important;
  }
  .mb-md-9,
  .my-md-9 {
    margin-bottom: 6rem !important;
  }
  .ml-md-9,
  .mx-md-9 {
    margin-left: 6rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 0.75rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 0.75rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 0.75rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 0.75rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 0.75rem !important;
  }
  .p-md-4 {
    padding: 1rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1rem !important;
  }
  .p-md-5 {
    padding: 1.5rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 1.5rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 1.5rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 1.5rem !important;
  }
  .p-md-6 {
    padding: 2rem !important;
  }
  .pt-md-6,
  .py-md-6 {
    padding-top: 2rem !important;
  }
  .pr-md-6,
  .px-md-6 {
    padding-right: 2rem !important;
  }
  .pb-md-6,
  .py-md-6 {
    padding-bottom: 2rem !important;
  }
  .pl-md-6,
  .px-md-6 {
    padding-left: 2rem !important;
  }
  .p-md-7 {
    padding: 3rem !important;
  }
  .pt-md-7,
  .py-md-7 {
    padding-top: 3rem !important;
  }
  .pr-md-7,
  .px-md-7 {
    padding-right: 3rem !important;
  }
  .pb-md-7,
  .py-md-7 {
    padding-bottom: 3rem !important;
  }
  .pl-md-7,
  .px-md-7 {
    padding-left: 3rem !important;
  }
  .p-md-8 {
    padding: 4rem !important;
  }
  .pt-md-8,
  .py-md-8 {
    padding-top: 4rem !important;
  }
  .pr-md-8,
  .px-md-8 {
    padding-right: 4rem !important;
  }
  .pb-md-8,
  .py-md-8 {
    padding-bottom: 4rem !important;
  }
  .pl-md-8,
  .px-md-8 {
    padding-left: 4rem !important;
  }
  .p-md-9 {
    padding: 6rem !important;
  }
  .pt-md-9,
  .py-md-9 {
    padding-top: 6rem !important;
  }
  .pr-md-9,
  .px-md-9 {
    padding-right: 6rem !important;
  }
  .pb-md-9,
  .py-md-9 {
    padding-bottom: 6rem !important;
  }
  .pl-md-9,
  .px-md-9 {
    padding-left: 6rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 0.75rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 0.75rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 0.75rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 0.75rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 0.75rem !important;
  }
  .m-lg-4 {
    margin: 1rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1rem !important;
  }
  .m-lg-5 {
    margin: 1.5rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 1.5rem !important;
  }
  .m-lg-6 {
    margin: 2rem !important;
  }
  .mt-lg-6,
  .my-lg-6 {
    margin-top: 2rem !important;
  }
  .mr-lg-6,
  .mx-lg-6 {
    margin-right: 2rem !important;
  }
  .mb-lg-6,
  .my-lg-6 {
    margin-bottom: 2rem !important;
  }
  .ml-lg-6,
  .mx-lg-6 {
    margin-left: 2rem !important;
  }
  .m-lg-7 {
    margin: 3rem !important;
  }
  .mt-lg-7,
  .my-lg-7 {
    margin-top: 3rem !important;
  }
  .mr-lg-7,
  .mx-lg-7 {
    margin-right: 3rem !important;
  }
  .mb-lg-7,
  .my-lg-7 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-7,
  .mx-lg-7 {
    margin-left: 3rem !important;
  }
  .m-lg-8 {
    margin: 4rem !important;
  }
  .mt-lg-8,
  .my-lg-8 {
    margin-top: 4rem !important;
  }
  .mr-lg-8,
  .mx-lg-8 {
    margin-right: 4rem !important;
  }
  .mb-lg-8,
  .my-lg-8 {
    margin-bottom: 4rem !important;
  }
  .ml-lg-8,
  .mx-lg-8 {
    margin-left: 4rem !important;
  }
  .m-lg-9 {
    margin: 6rem !important;
  }
  .mt-lg-9,
  .my-lg-9 {
    margin-top: 6rem !important;
  }
  .mr-lg-9,
  .mx-lg-9 {
    margin-right: 6rem !important;
  }
  .mb-lg-9,
  .my-lg-9 {
    margin-bottom: 6rem !important;
  }
  .ml-lg-9,
  .mx-lg-9 {
    margin-left: 6rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 0.75rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 0.75rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 0.75rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 0.75rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 0.75rem !important;
  }
  .p-lg-4 {
    padding: 1rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1rem !important;
  }
  .p-lg-5 {
    padding: 1.5rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 1.5rem !important;
  }
  .p-lg-6 {
    padding: 2rem !important;
  }
  .pt-lg-6,
  .py-lg-6 {
    padding-top: 2rem !important;
  }
  .pr-lg-6,
  .px-lg-6 {
    padding-right: 2rem !important;
  }
  .pb-lg-6,
  .py-lg-6 {
    padding-bottom: 2rem !important;
  }
  .pl-lg-6,
  .px-lg-6 {
    padding-left: 2rem !important;
  }
  .p-lg-7 {
    padding: 3rem !important;
  }
  .pt-lg-7,
  .py-lg-7 {
    padding-top: 3rem !important;
  }
  .pr-lg-7,
  .px-lg-7 {
    padding-right: 3rem !important;
  }
  .pb-lg-7,
  .py-lg-7 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-7,
  .px-lg-7 {
    padding-left: 3rem !important;
  }
  .p-lg-8 {
    padding: 4rem !important;
  }
  .pt-lg-8,
  .py-lg-8 {
    padding-top: 4rem !important;
  }
  .pr-lg-8,
  .px-lg-8 {
    padding-right: 4rem !important;
  }
  .pb-lg-8,
  .py-lg-8 {
    padding-bottom: 4rem !important;
  }
  .pl-lg-8,
  .px-lg-8 {
    padding-left: 4rem !important;
  }
  .p-lg-9 {
    padding: 6rem !important;
  }
  .pt-lg-9,
  .py-lg-9 {
    padding-top: 6rem !important;
  }
  .pr-lg-9,
  .px-lg-9 {
    padding-right: 6rem !important;
  }
  .pb-lg-9,
  .py-lg-9 {
    padding-bottom: 6rem !important;
  }
  .pl-lg-9,
  .px-lg-9 {
    padding-left: 6rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1280px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 0.75rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 0.75rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 0.75rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 0.75rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 0.75rem !important;
  }
  .m-xl-4 {
    margin: 1rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1rem !important;
  }
  .m-xl-5 {
    margin: 1.5rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 1.5rem !important;
  }
  .m-xl-6 {
    margin: 2rem !important;
  }
  .mt-xl-6,
  .my-xl-6 {
    margin-top: 2rem !important;
  }
  .mr-xl-6,
  .mx-xl-6 {
    margin-right: 2rem !important;
  }
  .mb-xl-6,
  .my-xl-6 {
    margin-bottom: 2rem !important;
  }
  .ml-xl-6,
  .mx-xl-6 {
    margin-left: 2rem !important;
  }
  .m-xl-7 {
    margin: 3rem !important;
  }
  .mt-xl-7,
  .my-xl-7 {
    margin-top: 3rem !important;
  }
  .mr-xl-7,
  .mx-xl-7 {
    margin-right: 3rem !important;
  }
  .mb-xl-7,
  .my-xl-7 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-7,
  .mx-xl-7 {
    margin-left: 3rem !important;
  }
  .m-xl-8 {
    margin: 4rem !important;
  }
  .mt-xl-8,
  .my-xl-8 {
    margin-top: 4rem !important;
  }
  .mr-xl-8,
  .mx-xl-8 {
    margin-right: 4rem !important;
  }
  .mb-xl-8,
  .my-xl-8 {
    margin-bottom: 4rem !important;
  }
  .ml-xl-8,
  .mx-xl-8 {
    margin-left: 4rem !important;
  }
  .m-xl-9 {
    margin: 6rem !important;
  }
  .mt-xl-9,
  .my-xl-9 {
    margin-top: 6rem !important;
  }
  .mr-xl-9,
  .mx-xl-9 {
    margin-right: 6rem !important;
  }
  .mb-xl-9,
  .my-xl-9 {
    margin-bottom: 6rem !important;
  }
  .ml-xl-9,
  .mx-xl-9 {
    margin-left: 6rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 0.75rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 0.75rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 0.75rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 0.75rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 0.75rem !important;
  }
  .p-xl-4 {
    padding: 1rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1rem !important;
  }
  .p-xl-5 {
    padding: 1.5rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 1.5rem !important;
  }
  .p-xl-6 {
    padding: 2rem !important;
  }
  .pt-xl-6,
  .py-xl-6 {
    padding-top: 2rem !important;
  }
  .pr-xl-6,
  .px-xl-6 {
    padding-right: 2rem !important;
  }
  .pb-xl-6,
  .py-xl-6 {
    padding-bottom: 2rem !important;
  }
  .pl-xl-6,
  .px-xl-6 {
    padding-left: 2rem !important;
  }
  .p-xl-7 {
    padding: 3rem !important;
  }
  .pt-xl-7,
  .py-xl-7 {
    padding-top: 3rem !important;
  }
  .pr-xl-7,
  .px-xl-7 {
    padding-right: 3rem !important;
  }
  .pb-xl-7,
  .py-xl-7 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-7,
  .px-xl-7 {
    padding-left: 3rem !important;
  }
  .p-xl-8 {
    padding: 4rem !important;
  }
  .pt-xl-8,
  .py-xl-8 {
    padding-top: 4rem !important;
  }
  .pr-xl-8,
  .px-xl-8 {
    padding-right: 4rem !important;
  }
  .pb-xl-8,
  .py-xl-8 {
    padding-bottom: 4rem !important;
  }
  .pl-xl-8,
  .px-xl-8 {
    padding-left: 4rem !important;
  }
  .p-xl-9 {
    padding: 6rem !important;
  }
  .pt-xl-9,
  .py-xl-9 {
    padding-top: 6rem !important;
  }
  .pr-xl-9,
  .px-xl-9 {
    padding-right: 6rem !important;
  }
  .pb-xl-9,
  .py-xl-9 {
    padding-bottom: 6rem !important;
  }
  .pl-xl-9,
  .px-xl-9 {
    padding-left: 6rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.text-justify {
  text-align: justify !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1280px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #467fcf !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #2f66b3 !important;
}

.text-secondary {
  color: #868e96 !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #6c757d !important;
}

.text-success {
  color: #5eba00 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #448700 !important;
}

.text-info {
  color: #45aaf2 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #1594ef !important;
}

.text-warning {
  color: #f1c40f !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #c29d0b !important;
}

.text-danger {
  color: #cd201f !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #a11918 !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important;
}

.text-body {
  color: #495057 !important;
}

.text-muted {
  color: #9aa0ac !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table, .text-wrap table {
    border-collapse: collapse !important;
  }
  
  .table td,
  .text-wrap table td, .table th, .text-wrap table th {
    background-color: #fff !important;
  }
  .table-bordered th, .text-wrap table th,
  .table-bordered td,
  .text-wrap table td {
    border: 1px solid #dee2e6 !important;
  }
}

html {
  font-size: 16px;
  height: 100%;
  direction: ltr;
}

body {
  direction: ltr;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-tap-highlight-color: transparent;
  -webkit-text-size-adjust: none;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  -webkit-font-feature-settings: "liga" 0;
  font-feature-settings: "liga" 0;
  height: 100%;
  overflow-y: scroll;
  position: relative;
}

@media print {
  body {
    background: none;
  }
}

body *::-webkit-scrollbar {
  width: 6px;
  height: 6px;
  transition: .3s background;
}

body *::-webkit-scrollbar-thumb {
  background: #ced4da;
}

body *:hover::-webkit-scrollbar-thumb {
  background: #adb5bd;
}

.lead {
  line-height: 1.4;
}

a {
  -webkit-text-decoration-skip: ink;
  text-decoration-skip: ink;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
.h1 a, .h2 a, .h3 a, .h4 a, .h5 a, .h6 a {
  color: inherit;
}

strong,
b {
  font-weight: 600;
}

p,
ul,
ol,
blockquote {
  margin-bottom: 1em;
}

blockquote {
  font-style: italic;
  color: #6e7687;
  padding-left: 2rem;
  border-left: 2px solid rgba(0, 40, 100, 0.12);
}

blockquote p {
  margin-bottom: 1rem;
}

blockquote cite {
  display: block;
  text-align: right;
}

blockquote cite:before {
  content: '— ';
}

code {
  background: rgba(0, 0, 0, 0.025);
  border: 1px solid rgba(0, 0, 0, 0.05);
  border-radius: 3px;
  padding: 3px;
}

pre code {
  padding: 0;
  border-radius: 0;
  border: none;
  background: none;
}

hr {
  margin-top: 2rem;
  margin-bottom: 2rem;
}

pre {
  color: #343a40;
  padding: 1rem;
  overflow: auto;
  font-size: 85%;
  line-height: 1.45;
  background-color: #f8fafc;
  border-radius: 3px;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  text-shadow: 0 1px white;
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

img {
  max-width: 100%;
}

.text-wrap {
  font-size: 1rem;
  line-height: 1.66;
}

.text-wrap > :first-child {
  margin-top: 0;
}

.text-wrap > :last-child {
  margin-bottom: 0;
}

.text-wrap > h1, .text-wrap > h2, .text-wrap > h3, .text-wrap > h4, .text-wrap > h5, .text-wrap > h6 {
  margin-top: 1em;
}

.section-nav {
  background-color: #f8f9fa;
  margin: 1rem 0;
  padding: .5rem 1rem;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  list-style: none;
}

.section-nav:before {
  content: 'Table of contents:';
  display: block;
  font-weight: 600;
}

@media print {
  .container {
    max-width: none;
  }
}

.row-cards > .col,
.row-cards > [class*='col-'] {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.row-deck > .col,
.row-deck > [class*='col-'] {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: stretch;
  align-items: stretch;
}

.row-deck > .col .card,
.row-deck > [class*='col-'] .card {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.col-text {
  max-width: 48rem;
}

.col-login {
  max-width: 24rem;
}

.gutters-0 {
  margin-right: 0;
  margin-left: 0;
}

.gutters-0 > .col,
.gutters-0 > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.gutters-0 .card {
  margin-bottom: 0;
}

.gutters-xs {
  margin-right: -0.25rem;
  margin-left: -0.25rem;
}

.gutters-xs > .col,
.gutters-xs > [class*="col-"] {
  padding-right: 0.25rem;
  padding-left: 0.25rem;
}

.gutters-xs .card {
  margin-bottom: 0.5rem;
}

.gutters-sm {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

.gutters-sm > .col,
.gutters-sm > [class*="col-"] {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.gutters-sm .card {
  margin-bottom: 1rem;
}

.gutters-lg {
  margin-right: -1rem;
  margin-left: -1rem;
}

.gutters-lg > .col,
.gutters-lg > [class*="col-"] {
  padding-right: 1rem;
  padding-left: 1rem;
}

.gutters-lg .card {
  margin-bottom: 2rem;
}

.gutters-xl {
  margin-right: -1.5rem;
  margin-left: -1.5rem;
}

.gutters-xl > .col,
.gutters-xl > [class*="col-"] {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}

.gutters-xl .card {
  margin-bottom: 3rem;
}

.page {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  min-height: 100%;
}

body.fixed-header .page {
  padding-top: 4.5rem;
}

@media (min-width: 1600px) {
  body.aside-opened .page {
    margin-right: 22rem;
  }
}

.page-main {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.page-content {
  margin: .75rem 0;
}

@media (min-width: 768px) {
  .page-content {
    margin: 1.5rem 0;
  }
}

.page-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  margin: 1.5rem 0 1.5rem;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.page-title {
  margin: 0;
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 2.5rem;
}

.page-title-icon {
  color: #9aa0ac;
  font-size: 1.25rem;
}

.page-subtitle {
  font-size: 0.8125rem;
  color: #6e7687;
  margin-left: 2rem;
}

.page-subtitle a {
  color: inherit;
}

.page-options {
  margin-left: auto;
}

.page-breadcrumb {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
}

.page-description {
  margin: .25rem 0 0;
  color: #6e7687;
}

.page-description a {
  color: inherit;
}

.page-single {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 1rem 0;
}

.content-heading {
  font-weight: 400;
  margin: 2rem 0 1.5rem;
  font-size: 1.25rem;
  line-height: 1.25;
}

.content-heading:first-child {
  margin-top: 0;
}

.aside {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  width: 22rem;
  background: #ffffff;
  border-left: 1px solid rgba(0, 40, 100, 0.12);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  z-index: 100;
  visibility: hidden;
  box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.05);
}

@media (min-width: 1600px) {
  body.aside-opened .aside {
    visibility: visible;
  }
}

.aside-body {
  padding: 1.5rem;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  overflow: auto;
}

.aside-footer {
  padding: 1rem 1.5rem;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.aside-header {
  padding: 1rem 1.5rem;
  border-bottom: 1px solid rgba(0, 40, 100, 0.12);
}

.header {
  padding-top: .75rem;
  padding-bottom: .75rem;
  background: #fff;
  border-bottom: 1px solid rgba(0, 40, 100, 0.12);
}

body.fixed-header .header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1030;
}

@media print {
  .header {
    display: none;
  }
}

.header .dropdown-menu {
  margin-top: .75rem;
}

.nav-unread {
  position: absolute;
  top: .25rem;
  right: .25rem;
  background: #cd201f;
  width: .5rem;
  height: .5rem;
  border-radius: 50%;
}

.header-brand {
  color: inherit;
  margin-right: 1rem;
  font-size: 1.25rem;
  white-space: nowrap;
  font-weight: 600;
  padding: 0;
  transition: .3s opacity;
  line-height: 2rem;
}

.header-brand:hover {
  opacity: .8;
  color: inherit;
  text-decoration: none;
}

.header-brand-img {
  height: 2rem;
  line-height: 2rem;
  vertical-align: bottom;
  margin-right: .5rem;
  width: auto;
}

.header-avatar {
  width: 2rem;
  height: 2rem;
  display: inline-block;
  vertical-align: bottom;
  border-radius: 50%;
}

.header-btn {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  line-height: 2rem;
  text-align: center;
  font-size: 1rem;
}

.header-btn.has-new {
  position: relative;
}

.header-btn.has-new:before {
  content: '';
  width: 6px;
  height: 6px;
  background: #cd201f;
  position: absolute;
  top: 4px;
  right: 4px;
  border-radius: 50%;
}

.header-toggler {
  width: 2rem;
  height: 2rem;
  position: relative;
  color: #9aa0ac;
}

.header-toggler:hover {
  color: #6e7687;
}

.header-toggler-icon {
  position: absolute;
  width: 1rem;
  height: 2px;
  color: inherit;
  background: currentColor;
  border-radius: 3px;
  top: 50%;
  left: 50%;
  margin: -2px 0 0 -.5rem;
  box-shadow: 0 5px currentColor, 0 -5px currentColor;
}

.footer {
  background: #fff;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
  font-size: 0.875rem;
  padding: 1.25rem 0;
  color: #9aa0ac;
}

.footer a:not(.btn) {
  color: #6e7687;
}

@media print {
  .footer {
    display: none;
  }
}

.bg-blue-lightest {
  background-color: #edf2fa !important;
}

a.bg-blue-lightest:hover, a.bg-blue-lightest:focus,
button.bg-blue-lightest:hover,
button.bg-blue-lightest:focus {
  background-color: #c5d5ef !important;
}

.bg-blue-lighter {
  background-color: #c8d9f1 !important;
}

a.bg-blue-lighter:hover, a.bg-blue-lighter:focus,
button.bg-blue-lighter:hover,
button.bg-blue-lighter:focus {
  background-color: #9fbde7 !important;
}

.bg-blue-light {
  background-color: #7ea5dd !important;
}

a.bg-blue-light:hover, a.bg-blue-light:focus,
button.bg-blue-light:hover,
button.bg-blue-light:focus {
  background-color: #5689d2 !important;
}

.bg-blue-dark {
  background-color: #3866a6 !important;
}

a.bg-blue-dark:hover, a.bg-blue-dark:focus,
button.bg-blue-dark:hover,
button.bg-blue-dark:focus {
  background-color: #2b4f80 !important;
}

.bg-blue-darker {
  background-color: #1c3353 !important;
}

a.bg-blue-darker:hover, a.bg-blue-darker:focus,
button.bg-blue-darker:hover,
button.bg-blue-darker:focus {
  background-color: #0f1c2d !important;
}

.bg-blue-darkest {
  background-color: #0e1929 !important;
}

a.bg-blue-darkest:hover, a.bg-blue-darkest:focus,
button.bg-blue-darkest:hover,
button.bg-blue-darkest:focus {
  background-color: #010203 !important;
}

.bg-indigo-lightest {
  background-color: #f0f1fa !important;
}

a.bg-indigo-lightest:hover, a.bg-indigo-lightest:focus,
button.bg-indigo-lightest:hover,
button.bg-indigo-lightest:focus {
  background-color: #cacded !important;
}

.bg-indigo-lighter {
  background-color: #d1d5f0 !important;
}

a.bg-indigo-lighter:hover, a.bg-indigo-lighter:focus,
button.bg-indigo-lighter:hover,
button.bg-indigo-lighter:focus {
  background-color: #abb2e3 !important;
}

.bg-indigo-light {
  background-color: #939edc !important;
}

a.bg-indigo-light:hover, a.bg-indigo-light:focus,
button.bg-indigo-light:hover,
button.bg-indigo-light:focus {
  background-color: #6c7bd0 !important;
}

.bg-indigo-dark {
  background-color: #515da4 !important;
}

a.bg-indigo-dark:hover, a.bg-indigo-dark:focus,
button.bg-indigo-dark:hover,
button.bg-indigo-dark:focus {
  background-color: #404a82 !important;
}

.bg-indigo-darker {
  background-color: #282e52 !important;
}

a.bg-indigo-darker:hover, a.bg-indigo-darker:focus,
button.bg-indigo-darker:hover,
button.bg-indigo-darker:focus {
  background-color: #171b30 !important;
}

.bg-indigo-darkest {
  background-color: #141729 !important;
}

a.bg-indigo-darkest:hover, a.bg-indigo-darkest:focus,
button.bg-indigo-darkest:hover,
button.bg-indigo-darkest:focus {
  background-color: #030407 !important;
}

.bg-purple-lightest {
  background-color: #f6effd !important;
}

a.bg-purple-lightest:hover, a.bg-purple-lightest:focus,
button.bg-purple-lightest:hover,
button.bg-purple-lightest:focus {
  background-color: #ddc2f7 !important;
}

.bg-purple-lighter {
  background-color: #e4cff9 !important;
}

a.bg-purple-lighter:hover, a.bg-purple-lighter:focus,
button.bg-purple-lighter:hover,
button.bg-purple-lighter:focus {
  background-color: #cba2f3 !important;
}

.bg-purple-light {
  background-color: #c08ef0 !important;
}

a.bg-purple-light:hover, a.bg-purple-light:focus,
button.bg-purple-light:hover,
button.bg-purple-light:focus {
  background-color: #a761ea !important;
}

.bg-purple-dark {
  background-color: #844bbb !important;
}

a.bg-purple-dark:hover, a.bg-purple-dark:focus,
button.bg-purple-dark:hover,
button.bg-purple-dark:focus {
  background-color: #6a3a99 !important;
}

.bg-purple-darker {
  background-color: #42265e !important;
}

a.bg-purple-darker:hover, a.bg-purple-darker:focus,
button.bg-purple-darker:hover,
button.bg-purple-darker:focus {
  background-color: #29173a !important;
}

.bg-purple-darkest {
  background-color: #21132f !important;
}

a.bg-purple-darkest:hover, a.bg-purple-darkest:focus,
button.bg-purple-darkest:hover,
button.bg-purple-darkest:focus {
  background-color: #08040b !important;
}

.bg-pink-lightest {
  background-color: #fef0f5 !important;
}

a.bg-pink-lightest:hover, a.bg-pink-lightest:focus,
button.bg-pink-lightest:hover,
button.bg-pink-lightest:focus {
  background-color: #fbc0d5 !important;
}

.bg-pink-lighter {
  background-color: #fcd3e1 !important;
}

a.bg-pink-lighter:hover, a.bg-pink-lighter:focus,
button.bg-pink-lighter:hover,
button.bg-pink-lighter:focus {
  background-color: #f9a3c0 !important;
}

.bg-pink-light {
  background-color: #f999b9 !important;
}

a.bg-pink-light:hover, a.bg-pink-light:focus,
button.bg-pink-light:hover,
button.bg-pink-light:focus {
  background-color: #f66998 !important;
}

.bg-pink-dark {
  background-color: #c5577c !important;
}

a.bg-pink-dark:hover, a.bg-pink-dark:focus,
button.bg-pink-dark:hover,
button.bg-pink-dark:focus {
  background-color: #ad3c62 !important;
}

.bg-pink-darker {
  background-color: #622c3e !important;
}

a.bg-pink-darker:hover, a.bg-pink-darker:focus,
button.bg-pink-darker:hover,
button.bg-pink-darker:focus {
  background-color: #3f1c28 !important;
}

.bg-pink-darkest {
  background-color: #31161f !important;
}

a.bg-pink-darkest:hover, a.bg-pink-darkest:focus,
button.bg-pink-darkest:hover,
button.bg-pink-darkest:focus {
  background-color: #0e0609 !important;
}

.bg-red-lightest {
  background-color: #fae9e9 !important;
}

a.bg-red-lightest:hover, a.bg-red-lightest:focus,
button.bg-red-lightest:hover,
button.bg-red-lightest:focus {
  background-color: #f1bfbf !important;
}

.bg-red-lighter {
  background-color: #f0bcbc !important;
}

a.bg-red-lighter:hover, a.bg-red-lighter:focus,
button.bg-red-lighter:hover,
button.bg-red-lighter:focus {
  background-color: #e79292 !important;
}

.bg-red-light {
  background-color: #dc6362 !important;
}

a.bg-red-light:hover, a.bg-red-light:focus,
button.bg-red-light:hover,
button.bg-red-light:focus {
  background-color: #d33a38 !important;
}

.bg-red-dark {
  background-color: #a41a19 !important;
}

a.bg-red-dark:hover, a.bg-red-dark:focus,
button.bg-red-dark:hover,
button.bg-red-dark:focus {
  background-color: #781312 !important;
}

.bg-red-darker {
  background-color: #520d0c !important;
}

a.bg-red-darker:hover, a.bg-red-darker:focus,
button.bg-red-darker:hover,
button.bg-red-darker:focus {
  background-color: #260605 !important;
}

.bg-red-darkest {
  background-color: #290606 !important;
}

a.bg-red-darkest:hover, a.bg-red-darkest:focus,
button.bg-red-darkest:hover,
button.bg-red-darkest:focus {
  background-color: black !important;
}

.bg-orange-lightest {
  background-color: #fff5ec !important;
}

a.bg-orange-lightest:hover, a.bg-orange-lightest:focus,
button.bg-orange-lightest:hover,
button.bg-orange-lightest:focus {
  background-color: peachpuff !important;
}

.bg-orange-lighter {
  background-color: #fee0c7 !important;
}

a.bg-orange-lighter:hover, a.bg-orange-lighter:focus,
button.bg-orange-lighter:hover,
button.bg-orange-lighter:focus {
  background-color: #fdc495 !important;
}

.bg-orange-light {
  background-color: #feb67c !important;
}

a.bg-orange-light:hover, a.bg-orange-light:focus,
button.bg-orange-light:hover,
button.bg-orange-light:focus {
  background-color: #fe9a49 !important;
}

.bg-orange-dark {
  background-color: #ca7836 !important;
}

a.bg-orange-dark:hover, a.bg-orange-dark:focus,
button.bg-orange-dark:hover,
button.bg-orange-dark:focus {
  background-color: #a2602b !important;
}

.bg-orange-darker {
  background-color: #653c1b !important;
}

a.bg-orange-darker:hover, a.bg-orange-darker:focus,
button.bg-orange-darker:hover,
button.bg-orange-darker:focus {
  background-color: #3d2410 !important;
}

.bg-orange-darkest {
  background-color: #331e0e !important;
}

a.bg-orange-darkest:hover, a.bg-orange-darkest:focus,
button.bg-orange-darkest:hover,
button.bg-orange-darkest:focus {
  background-color: #0b0603 !important;
}

.bg-yellow-lightest {
  background-color: #fef9e7 !important;
}

a.bg-yellow-lightest:hover, a.bg-yellow-lightest:focus,
button.bg-yellow-lightest:hover,
button.bg-yellow-lightest:focus {
  background-color: #fcedb6 !important;
}

.bg-yellow-lighter {
  background-color: #fbedb7 !important;
}

a.bg-yellow-lighter:hover, a.bg-yellow-lighter:focus,
button.bg-yellow-lighter:hover,
button.bg-yellow-lighter:focus {
  background-color: #f8e187 !important;
}

.bg-yellow-light {
  background-color: #f5d657 !important;
}

a.bg-yellow-light:hover, a.bg-yellow-light:focus,
button.bg-yellow-light:hover,
button.bg-yellow-light:focus {
  background-color: #f2ca27 !important;
}

.bg-yellow-dark {
  background-color: #c19d0c !important;
}

a.bg-yellow-dark:hover, a.bg-yellow-dark:focus,
button.bg-yellow-dark:hover,
button.bg-yellow-dark:focus {
  background-color: #917609 !important;
}

.bg-yellow-darker {
  background-color: #604e06 !important;
}

a.bg-yellow-darker:hover, a.bg-yellow-darker:focus,
button.bg-yellow-darker:hover,
button.bg-yellow-darker:focus {
  background-color: #302703 !important;
}

.bg-yellow-darkest {
  background-color: #302703 !important;
}

a.bg-yellow-darkest:hover, a.bg-yellow-darkest:focus,
button.bg-yellow-darkest:hover,
button.bg-yellow-darkest:focus {
  background-color: black !important;
}

.bg-green-lightest {
  background-color: #eff8e6 !important;
}

a.bg-green-lightest:hover, a.bg-green-lightest:focus,
button.bg-green-lightest:hover,
button.bg-green-lightest:focus {
  background-color: #d6edbe !important;
}

.bg-green-lighter {
  background-color: #cfeab3 !important;
}

a.bg-green-lighter:hover, a.bg-green-lighter:focus,
button.bg-green-lighter:hover,
button.bg-green-lighter:focus {
  background-color: #b6df8b !important;
}

.bg-green-light {
  background-color: #8ecf4d !important;
}

a.bg-green-light:hover, a.bg-green-light:focus,
button.bg-green-light:hover,
button.bg-green-light:focus {
  background-color: #75b831 !important;
}

.bg-green-dark {
  background-color: #4b9500 !important;
}

a.bg-green-dark:hover, a.bg-green-dark:focus,
button.bg-green-dark:hover,
button.bg-green-dark:focus {
  background-color: #316200 !important;
}

.bg-green-darker {
  background-color: #264a00 !important;
}

a.bg-green-darker:hover, a.bg-green-darker:focus,
button.bg-green-darker:hover,
button.bg-green-darker:focus {
  background-color: #0c1700 !important;
}

.bg-green-darkest {
  background-color: #132500 !important;
}

a.bg-green-darkest:hover, a.bg-green-darkest:focus,
button.bg-green-darkest:hover,
button.bg-green-darkest:focus {
  background-color: black !important;
}

.bg-teal-lightest {
  background-color: #eafaf8 !important;
}

a.bg-teal-lightest:hover, a.bg-teal-lightest:focus,
button.bg-teal-lightest:hover,
button.bg-teal-lightest:focus {
  background-color: #c1f0ea !important;
}

.bg-teal-lighter {
  background-color: #bfefea !important;
}

a.bg-teal-lighter:hover, a.bg-teal-lighter:focus,
button.bg-teal-lighter:hover,
button.bg-teal-lighter:focus {
  background-color: #96e5dd !important;
}

.bg-teal-light {
  background-color: #6bdbcf !important;
}

a.bg-teal-light:hover, a.bg-teal-light:focus,
button.bg-teal-light:hover,
button.bg-teal-light:focus {
  background-color: #42d1c2 !important;
}

.bg-teal-dark {
  background-color: #22a295 !important;
}

a.bg-teal-dark:hover, a.bg-teal-dark:focus,
button.bg-teal-dark:hover,
button.bg-teal-dark:focus {
  background-color: #19786e !important;
}

.bg-teal-darker {
  background-color: #11514a !important;
}

a.bg-teal-darker:hover, a.bg-teal-darker:focus,
button.bg-teal-darker:hover,
button.bg-teal-darker:focus {
  background-color: #082723 !important;
}

.bg-teal-darkest {
  background-color: #092925 !important;
}

a.bg-teal-darkest:hover, a.bg-teal-darkest:focus,
button.bg-teal-darkest:hover,
button.bg-teal-darkest:focus {
  background-color: black !important;
}

.bg-cyan-lightest {
  background-color: #e8f6f8 !important;
}

a.bg-cyan-lightest:hover, a.bg-cyan-lightest:focus,
button.bg-cyan-lightest:hover,
button.bg-cyan-lightest:focus {
  background-color: #c1e7ec !important;
}

.bg-cyan-lighter {
  background-color: #b9e3ea !important;
}

a.bg-cyan-lighter:hover, a.bg-cyan-lighter:focus,
button.bg-cyan-lighter:hover,
button.bg-cyan-lighter:focus {
  background-color: #92d3de !important;
}

.bg-cyan-light {
  background-color: #5dbecd !important;
}

a.bg-cyan-light:hover, a.bg-cyan-light:focus,
button.bg-cyan-light:hover,
button.bg-cyan-light:focus {
  background-color: #3aabbd !important;
}

.bg-cyan-dark {
  background-color: #128293 !important;
}

a.bg-cyan-dark:hover, a.bg-cyan-dark:focus,
button.bg-cyan-dark:hover,
button.bg-cyan-dark:focus {
  background-color: #0c5a66 !important;
}

.bg-cyan-darker {
  background-color: #09414a !important;
}

a.bg-cyan-darker:hover, a.bg-cyan-darker:focus,
button.bg-cyan-darker:hover,
button.bg-cyan-darker:focus {
  background-color: #03191d !important;
}

.bg-cyan-darkest {
  background-color: #052025 !important;
}

a.bg-cyan-darkest:hover, a.bg-cyan-darkest:focus,
button.bg-cyan-darkest:hover,
button.bg-cyan-darkest:focus {
  background-color: black !important;
}

.bg-white-lightest {
  background-color: white !important;
}

a.bg-white-lightest:hover, a.bg-white-lightest:focus,
button.bg-white-lightest:hover,
button.bg-white-lightest:focus {
  background-color: #e6e5e5 !important;
}

.bg-white-lighter {
  background-color: white !important;
}

a.bg-white-lighter:hover, a.bg-white-lighter:focus,
button.bg-white-lighter:hover,
button.bg-white-lighter:focus {
  background-color: #e6e5e5 !important;
}

.bg-white-light {
  background-color: white !important;
}

a.bg-white-light:hover, a.bg-white-light:focus,
button.bg-white-light:hover,
button.bg-white-light:focus {
  background-color: #e6e5e5 !important;
}

.bg-white-dark {
  background-color: #cccccc !important;
}

a.bg-white-dark:hover, a.bg-white-dark:focus,
button.bg-white-dark:hover,
button.bg-white-dark:focus {
  background-color: #b3b2b2 !important;
}

.bg-white-darker {
  background-color: #666666 !important;
}

a.bg-white-darker:hover, a.bg-white-darker:focus,
button.bg-white-darker:hover,
button.bg-white-darker:focus {
  background-color: #4d4c4c !important;
}

.bg-white-darkest {
  background-color: #333333 !important;
}

a.bg-white-darkest:hover, a.bg-white-darkest:focus,
button.bg-white-darkest:hover,
button.bg-white-darkest:focus {
  background-color: #1a1919 !important;
}

.bg-gray-lightest {
  background-color: #f3f4f5 !important;
}

a.bg-gray-lightest:hover, a.bg-gray-lightest:focus,
button.bg-gray-lightest:hover,
button.bg-gray-lightest:focus {
  background-color: #d7dbde !important;
}

.bg-gray-lighter {
  background-color: #dbdde0 !important;
}

a.bg-gray-lighter:hover, a.bg-gray-lighter:focus,
button.bg-gray-lighter:hover,
button.bg-gray-lighter:focus {
  background-color: #c0c3c8 !important;
}

.bg-gray-light {
  background-color: #aab0b6 !important;
}

a.bg-gray-light:hover, a.bg-gray-light:focus,
button.bg-gray-light:hover,
button.bg-gray-light:focus {
  background-color: #8f979e !important;
}

.bg-gray-dark {
  background-color: #6b7278 !important;
}

a.bg-gray-dark:hover, a.bg-gray-dark:focus,
button.bg-gray-dark:hover,
button.bg-gray-dark:focus {
  background-color: #53585d !important;
}

.bg-gray-darker {
  background-color: #36393c !important;
}

a.bg-gray-darker:hover, a.bg-gray-darker:focus,
button.bg-gray-darker:hover,
button.bg-gray-darker:focus {
  background-color: #1e2021 !important;
}

.bg-gray-darkest {
  background-color: #1b1c1e !important;
}

a.bg-gray-darkest:hover, a.bg-gray-darkest:focus,
button.bg-gray-darkest:hover,
button.bg-gray-darkest:focus {
  background-color: #030303 !important;
}

.bg-gray-dark-lightest {
  background-color: #ebebec !important;
}

a.bg-gray-dark-lightest:hover, a.bg-gray-dark-lightest:focus,
button.bg-gray-dark-lightest:hover,
button.bg-gray-dark-lightest:focus {
  background-color: #d1d1d3 !important;
}

.bg-gray-dark-lighter {
  background-color: #c2c4c6 !important;
}

a.bg-gray-dark-lighter:hover, a.bg-gray-dark-lighter:focus,
button.bg-gray-dark-lighter:hover,
button.bg-gray-dark-lighter:focus {
  background-color: #a8abad !important;
}

.bg-gray-dark-light {
  background-color: #717579 !important;
}

a.bg-gray-dark-light:hover, a.bg-gray-dark-light:focus,
button.bg-gray-dark-light:hover,
button.bg-gray-dark-light:focus {
  background-color: #585c5f !important;
}

.bg-gray-dark-dark {
  background-color: #2a2e33 !important;
}

a.bg-gray-dark-dark:hover, a.bg-gray-dark-dark:focus,
button.bg-gray-dark-dark:hover,
button.bg-gray-dark-dark:focus {
  background-color: #131517 !important;
}

.bg-gray-dark-darker {
  background-color: #15171a !important;
}

a.bg-gray-dark-darker:hover, a.bg-gray-dark-darker:focus,
button.bg-gray-dark-darker:hover,
button.bg-gray-dark-darker:focus {
  background-color: black !important;
}

.bg-gray-dark-darkest {
  background-color: #0a0c0d !important;
}

a.bg-gray-dark-darkest:hover, a.bg-gray-dark-darkest:focus,
button.bg-gray-dark-darkest:hover,
button.bg-gray-dark-darkest:focus {
  background-color: black !important;
}

.bg-azure-lightest {
  background-color: #ecf7fe !important;
}

a.bg-azure-lightest:hover, a.bg-azure-lightest:focus,
button.bg-azure-lightest:hover,
button.bg-azure-lightest:focus {
  background-color: #bce3fb !important;
}

.bg-azure-lighter {
  background-color: #c7e6fb !important;
}

a.bg-azure-lighter:hover, a.bg-azure-lighter:focus,
button.bg-azure-lighter:hover,
button.bg-azure-lighter:focus {
  background-color: #97d1f8 !important;
}

.bg-azure-light {
  background-color: #7dc4f6 !important;
}

a.bg-azure-light:hover, a.bg-azure-light:focus,
button.bg-azure-light:hover,
button.bg-azure-light:focus {
  background-color: #4daef3 !important;
}

.bg-azure-dark {
  background-color: #3788c2 !important;
}

a.bg-azure-dark:hover, a.bg-azure-dark:focus,
button.bg-azure-dark:hover,
button.bg-azure-dark:focus {
  background-color: #2c6c9a !important;
}

.bg-azure-darker {
  background-color: #1c4461 !important;
}

a.bg-azure-darker:hover, a.bg-azure-darker:focus,
button.bg-azure-darker:hover,
button.bg-azure-darker:focus {
  background-color: #112839 !important;
}

.bg-azure-darkest {
  background-color: #0e2230 !important;
}

a.bg-azure-darkest:hover, a.bg-azure-darkest:focus,
button.bg-azure-darkest:hover,
button.bg-azure-darkest:focus {
  background-color: #020609 !important;
}

.bg-lime-lightest {
  background-color: #f2fbeb !important;
}

a.bg-lime-lightest:hover, a.bg-lime-lightest:focus,
button.bg-lime-lightest:hover,
button.bg-lime-lightest:focus {
  background-color: #d6f3c1 !important;
}

.bg-lime-lighter {
  background-color: #d7f2c2 !important;
}

a.bg-lime-lighter:hover, a.bg-lime-lighter:focus,
button.bg-lime-lighter:hover,
button.bg-lime-lighter:focus {
  background-color: #bbe998 !important;
}

.bg-lime-light {
  background-color: #a3e072 !important;
}

a.bg-lime-light:hover, a.bg-lime-light:focus,
button.bg-lime-light:hover,
button.bg-lime-light:focus {
  background-color: #88d748 !important;
}

.bg-lime-dark {
  background-color: #62a82a !important;
}

a.bg-lime-dark:hover, a.bg-lime-dark:focus,
button.bg-lime-dark:hover,
button.bg-lime-dark:focus {
  background-color: #4a7f20 !important;
}

.bg-lime-darker {
  background-color: #315415 !important;
}

a.bg-lime-darker:hover, a.bg-lime-darker:focus,
button.bg-lime-darker:hover,
button.bg-lime-darker:focus {
  background-color: #192b0b !important;
}

.bg-lime-darkest {
  background-color: #192a0b !important;
}

a.bg-lime-darkest:hover, a.bg-lime-darkest:focus,
button.bg-lime-darkest:hover,
button.bg-lime-darkest:focus {
  background-color: #010200 !important;
}

.display-1 i,
.display-2 i,
.display-3 i,
.display-4 i {
  vertical-align: baseline;
  font-size: 0.815em;
}

.text-inherit {
  color: inherit !important;
}

.text-default {
  color: #495057 !important;
}

.text-muted-dark {
  color: #6e7687 !important;
}

.tracking-tight {
  letter-spacing: -0.05em !important;
}

.tracking-normal {
  letter-spacing: 0 !important;
}

.tracking-wide {
  letter-spacing: 0.05em !important;
}

.leading-none {
  line-height: 1 !important;
}

.leading-tight {
  line-height: 1.25 !important;
}

.leading-normal {
  line-height: 1.5 !important;
}

.leading-loose {
  line-height: 2 !important;
}

.bg-blue {
  background-color: #467fcf !important;
}

a.bg-blue:hover, a.bg-blue:focus,
button.bg-blue:hover,
button.bg-blue:focus {
  background-color: #2f66b3 !important;
}

.text-blue {
  color: #467fcf !important;
}

.bg-indigo {
  background-color: #6574cd !important;
}

a.bg-indigo:hover, a.bg-indigo:focus,
button.bg-indigo:hover,
button.bg-indigo:focus {
  background-color: #3f51c1 !important;
}

.text-indigo {
  color: #6574cd !important;
}

.bg-purple {
  background-color: #a55eea !important;
}

a.bg-purple:hover, a.bg-purple:focus,
button.bg-purple:hover,
button.bg-purple:focus {
  background-color: #8c31e4 !important;
}

.text-purple {
  color: #a55eea !important;
}

.bg-pink {
  background-color: #f66d9b !important;
}

a.bg-pink:hover, a.bg-pink:focus,
button.bg-pink:hover,
button.bg-pink:focus {
  background-color: #f33d7a !important;
}

.text-pink {
  color: #f66d9b !important;
}

.bg-red {
  background-color: #cd201f !important;
}

a.bg-red:hover, a.bg-red:focus,
button.bg-red:hover,
button.bg-red:focus {
  background-color: #a11918 !important;
}

.text-red {
  color: #cd201f !important;
}

.bg-orange {
  background-color: #fd9644 !important;
}

a.bg-orange:hover, a.bg-orange:focus,
button.bg-orange:hover,
button.bg-orange:focus {
  background-color: #fc7a12 !important;
}

.text-orange {
  color: #fd9644 !important;
}

.bg-yellow {
  background-color: #f1c40f !important;
}

a.bg-yellow:hover, a.bg-yellow:focus,
button.bg-yellow:hover,
button.bg-yellow:focus {
  background-color: #c29d0b !important;
}

.text-yellow {
  color: #f1c40f !important;
}

.bg-green {
  background-color: #5eba00 !important;
}

a.bg-green:hover, a.bg-green:focus,
button.bg-green:hover,
button.bg-green:focus {
  background-color: #448700 !important;
}

.text-green {
  color: #5eba00 !important;
}

.bg-teal {
  background-color: #2bcbba !important;
}

a.bg-teal:hover, a.bg-teal:focus,
button.bg-teal:hover,
button.bg-teal:focus {
  background-color: #22a193 !important;
}

.text-teal {
  color: #2bcbba !important;
}

.bg-cyan {
  background-color: #17a2b8 !important;
}

a.bg-cyan:hover, a.bg-cyan:focus,
button.bg-cyan:hover,
button.bg-cyan:focus {
  background-color: #117a8b !important;
}

.text-cyan {
  color: #17a2b8 !important;
}

.bg-white {
  background-color: #fff !important;
}

a.bg-white:hover, a.bg-white:focus,
button.bg-white:hover,
button.bg-white:focus {
  background-color: #e6e5e5 !important;
}

.text-white {
  color: #fff !important;
}

.bg-gray {
  background-color: #868e96 !important;
}

a.bg-gray:hover, a.bg-gray:focus,
button.bg-gray:hover,
button.bg-gray:focus {
  background-color: #6c757d !important;
}

.text-gray {
  color: #868e96 !important;
}

.bg-gray-dark {
  background-color: #343a40 !important;
}

a.bg-gray-dark:hover, a.bg-gray-dark:focus,
button.bg-gray-dark:hover,
button.bg-gray-dark:focus {
  background-color: #1d2124 !important;
}

.text-gray-dark {
  color: #343a40 !important;
}

.bg-azure {
  background-color: #45aaf2 !important;
}

a.bg-azure:hover, a.bg-azure:focus,
button.bg-azure:hover,
button.bg-azure:focus {
  background-color: #1594ef !important;
}

.text-azure {
  color: #45aaf2 !important;
}

.bg-lime {
  background-color: #7bd235 !important;
}

a.bg-lime:hover, a.bg-lime:focus,
button.bg-lime:hover,
button.bg-lime:focus {
  background-color: #63ad27 !important;
}

.text-lime {
  color: #7bd235 !important;
}

.icon {
  color: #9aa0ac !important;
}

.icon i {
  vertical-align: -1px;
}

a.icon {
  text-decoration: none;
  cursor: pointer;
}

a.icon:hover {
  color: #495057 !important;
}

.o-auto {
  overflow: auto !important;
}

.o-hidden {
  overflow: hidden !important;
}

.shadow {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.nav-link,
.nav-item {
  padding: 0 .75rem;
  min-width: 2rem;
  transition: .3s color;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}

.nav-link .badge,
.nav-item .badge {
  position: absolute;
  top: 0;
  right: 0;
  padding: .2rem .25rem;
  min-width: 1rem;
}

.nav-tabs {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #9aa0ac;
  margin: 0 -.75rem;
}

.nav-tabs .nav-link {
  border: 0;
  color: inherit;
  border-bottom: 1px solid transparent;
  margin-bottom: -1px;
  transition: .3s border-color;
  font-weight: 400;
  padding: 1rem 0;
}

.nav-tabs .nav-link:hover:not(.disabled) {
  border-color: #6e7687;
  color: #6e7687;
}

.nav-tabs .nav-link.active {
  border-color: #467fcf;
  color: #467fcf;
  background: transparent;
}

.nav-tabs .nav-link.disabled {
  opacity: .4;
  cursor: default;
  pointer-events: none;
}

.nav-tabs .nav-item {
  margin-bottom: 0;
  position: relative;
}

.nav-tabs .nav-item i {
  margin-right: .25rem;
  line-height: 1;
  font-size: 0.875rem;
  width: 0.875rem;
  vertical-align: baseline;
  display: inline-block;
}

.nav-tabs .nav-item:hover .nav-submenu {
  display: block;
}

.nav-tabs .nav-submenu {
  display: none;
  position: absolute;
  background: #fff;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-top: none;
  z-index: 10;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  min-width: 10rem;
  border-radius: 0 0 3px 3px;
}

.nav-tabs .nav-submenu .nav-item {
  display: block;
  padding: .5rem 1rem;
  color: #9aa0ac;
  margin: 0 !important;
  cursor: pointer;
  transition: .3s background;
}

.nav-tabs .nav-submenu .nav-item.active {
  color: #467fcf;
}

.nav-tabs .nav-submenu .nav-item:hover {
  color: #6e7687;
  text-decoration: none;
  background: rgba(0, 0, 0, 0.024);
}

.btn {
  cursor: pointer;
  font-weight: 600;
  letter-spacing: .03em;
  font-size: 0.8125rem;
  min-width: 2.375rem;
}

.btn i {
  font-size: 1rem;
  vertical-align: -2px;
}

.btn-icon {
  padding-left: .5rem;
  padding-right: .5rem;
  text-align: center;
}

.btn-secondary {
  color: #495057;
  background-color: #fff;
  border-color: rgba(0, 40, 100, 0.12);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
}

.btn-secondary:hover {
  color: #495057;
  background-color: #f6f6f6;
  border-color: rgba(0, 20, 49, 0.12);
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 2px rgba(0, 40, 100, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #495057;
  background-color: #fff;
  border-color: rgba(0, 40, 100, 0.12);
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #495057;
  background-color: #e6e5e5;
  border-color: rgba(0, 15, 36, 0.12);
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(0, 40, 100, 0.5);
}

.btn-pill {
  border-radius: 10rem;
  padding-left: 1.5em;
  padding-right: 1.5em;
}

.btn-square {
  border-radius: 0;
}

.btn-facebook {
  color: #fff;
  background-color: #3b5998;
  border-color: #3b5998;
}

.btn-facebook:hover {
  color: #fff;
  background-color: #30497c;
  border-color: #2d4373;
}

.btn-facebook:focus, .btn-facebook.focus {
  box-shadow: 0 0 0 2px rgba(59, 89, 152, 0.5);
}

.btn-facebook.disabled, .btn-facebook:disabled {
  color: #fff;
  background-color: #3b5998;
  border-color: #3b5998;
}

.btn-facebook:not(:disabled):not(.disabled):active, .btn-facebook:not(:disabled):not(.disabled).active,
.show > .btn-facebook.dropdown-toggle {
  color: #fff;
  background-color: #2d4373;
  border-color: #293e6a;
}

.btn-facebook:not(:disabled):not(.disabled):active:focus, .btn-facebook:not(:disabled):not(.disabled).active:focus,
.show > .btn-facebook.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(59, 89, 152, 0.5);
}

.btn-twitter {
  color: #fff;
  background-color: #1da1f2;
  border-color: #1da1f2;
}

.btn-twitter:hover {
  color: #fff;
  background-color: #0d8ddc;
  border-color: #0c85d0;
}

.btn-twitter:focus, .btn-twitter.focus {
  box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.5);
}

.btn-twitter.disabled, .btn-twitter:disabled {
  color: #fff;
  background-color: #1da1f2;
  border-color: #1da1f2;
}

.btn-twitter:not(:disabled):not(.disabled):active, .btn-twitter:not(:disabled):not(.disabled).active,
.show > .btn-twitter.dropdown-toggle {
  color: #fff;
  background-color: #0c85d0;
  border-color: #0b7ec4;
}

.btn-twitter:not(:disabled):not(.disabled):active:focus, .btn-twitter:not(:disabled):not(.disabled).active:focus,
.show > .btn-twitter.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.5);
}

.btn-google {
  color: #fff;
  background-color: #dc4e41;
  border-color: #dc4e41;
}

.btn-google:hover {
  color: #fff;
  background-color: #d03526;
  border-color: #c63224;
}

.btn-google:focus, .btn-google.focus {
  box-shadow: 0 0 0 2px rgba(220, 78, 65, 0.5);
}

.btn-google.disabled, .btn-google:disabled {
  color: #fff;
  background-color: #dc4e41;
  border-color: #dc4e41;
}

.btn-google:not(:disabled):not(.disabled):active, .btn-google:not(:disabled):not(.disabled).active,
.show > .btn-google.dropdown-toggle {
  color: #fff;
  background-color: #c63224;
  border-color: #bb2f22;
}

.btn-google:not(:disabled):not(.disabled):active:focus, .btn-google:not(:disabled):not(.disabled).active:focus,
.show > .btn-google.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(220, 78, 65, 0.5);
}

.btn-youtube {
  color: #fff;
  background-color: #f00;
  border-color: #f00;
}

.btn-youtube:hover {
  color: #fff;
  background-color: #d90000;
  border-color: #cc0000;
}

.btn-youtube:focus, .btn-youtube.focus {
  box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.5);
}

.btn-youtube.disabled, .btn-youtube:disabled {
  color: #fff;
  background-color: #f00;
  border-color: #f00;
}

.btn-youtube:not(:disabled):not(.disabled):active, .btn-youtube:not(:disabled):not(.disabled).active,
.show > .btn-youtube.dropdown-toggle {
  color: #fff;
  background-color: #cc0000;
  border-color: #bf0000;
}

.btn-youtube:not(:disabled):not(.disabled):active:focus, .btn-youtube:not(:disabled):not(.disabled).active:focus,
.show > .btn-youtube.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.5);
}

.btn-vimeo {
  color: #fff;
  background-color: #1ab7ea;
  border-color: #1ab7ea;
}

.btn-vimeo:hover {
  color: #fff;
  background-color: #139ecb;
  border-color: #1295bf;
}

.btn-vimeo:focus, .btn-vimeo.focus {
  box-shadow: 0 0 0 2px rgba(26, 183, 234, 0.5);
}

.btn-vimeo.disabled, .btn-vimeo:disabled {
  color: #fff;
  background-color: #1ab7ea;
  border-color: #1ab7ea;
}

.btn-vimeo:not(:disabled):not(.disabled):active, .btn-vimeo:not(:disabled):not(.disabled).active,
.show > .btn-vimeo.dropdown-toggle {
  color: #fff;
  background-color: #1295bf;
  border-color: #108cb4;
}

.btn-vimeo:not(:disabled):not(.disabled):active:focus, .btn-vimeo:not(:disabled):not(.disabled).active:focus,
.show > .btn-vimeo.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(26, 183, 234, 0.5);
}

.btn-dribbble {
  color: #fff;
  background-color: #ea4c89;
  border-color: #ea4c89;
}

.btn-dribbble:hover {
  color: #fff;
  background-color: #e62a72;
  border-color: #e51e6b;
}

.btn-dribbble:focus, .btn-dribbble.focus {
  box-shadow: 0 0 0 2px rgba(234, 76, 137, 0.5);
}

.btn-dribbble.disabled, .btn-dribbble:disabled {
  color: #fff;
  background-color: #ea4c89;
  border-color: #ea4c89;
}

.btn-dribbble:not(:disabled):not(.disabled):active, .btn-dribbble:not(:disabled):not(.disabled).active,
.show > .btn-dribbble.dropdown-toggle {
  color: #fff;
  background-color: #e51e6b;
  border-color: #dc1a65;
}

.btn-dribbble:not(:disabled):not(.disabled):active:focus, .btn-dribbble:not(:disabled):not(.disabled).active:focus,
.show > .btn-dribbble.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(234, 76, 137, 0.5);
}

.btn-github {
  color: #fff;
  background-color: #181717;
  border-color: #181717;
}

.btn-github:hover {
  color: #fff;
  background-color: #040404;
  border-color: black;
}

.btn-github:focus, .btn-github.focus {
  box-shadow: 0 0 0 2px rgba(24, 23, 23, 0.5);
}

.btn-github.disabled, .btn-github:disabled {
  color: #fff;
  background-color: #181717;
  border-color: #181717;
}

.btn-github:not(:disabled):not(.disabled):active, .btn-github:not(:disabled):not(.disabled).active,
.show > .btn-github.dropdown-toggle {
  color: #fff;
  background-color: black;
  border-color: black;
}

.btn-github:not(:disabled):not(.disabled):active:focus, .btn-github:not(:disabled):not(.disabled).active:focus,
.show > .btn-github.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(24, 23, 23, 0.5);
}

.btn-instagram {
  color: #fff;
  background-color: #e4405f;
  border-color: #e4405f;
}

.btn-instagram:hover {
  color: #fff;
  background-color: #de1f44;
  border-color: #d31e40;
}

.btn-instagram:focus, .btn-instagram.focus {
  box-shadow: 0 0 0 2px rgba(228, 64, 95, 0.5);
}

.btn-instagram.disabled, .btn-instagram:disabled {
  color: #fff;
  background-color: #e4405f;
  border-color: #e4405f;
}

.btn-instagram:not(:disabled):not(.disabled):active, .btn-instagram:not(:disabled):not(.disabled).active,
.show > .btn-instagram.dropdown-toggle {
  color: #fff;
  background-color: #d31e40;
  border-color: #c81c3d;
}

.btn-instagram:not(:disabled):not(.disabled):active:focus, .btn-instagram:not(:disabled):not(.disabled).active:focus,
.show > .btn-instagram.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(228, 64, 95, 0.5);
}

.btn-pinterest {
  color: #fff;
  background-color: #bd081c;
  border-color: #bd081c;
}

.btn-pinterest:hover {
  color: #fff;
  background-color: #980617;
  border-color: #8c0615;
}

.btn-pinterest:focus, .btn-pinterest.focus {
  box-shadow: 0 0 0 2px rgba(189, 8, 28, 0.5);
}

.btn-pinterest.disabled, .btn-pinterest:disabled {
  color: #fff;
  background-color: #bd081c;
  border-color: #bd081c;
}

.btn-pinterest:not(:disabled):not(.disabled):active, .btn-pinterest:not(:disabled):not(.disabled).active,
.show > .btn-pinterest.dropdown-toggle {
  color: #fff;
  background-color: #8c0615;
  border-color: #800513;
}

.btn-pinterest:not(:disabled):not(.disabled):active:focus, .btn-pinterest:not(:disabled):not(.disabled).active:focus,
.show > .btn-pinterest.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(189, 8, 28, 0.5);
}

.btn-vk {
  color: #fff;
  background-color: #6383a8;
  border-color: #6383a8;
}

.btn-vk:hover {
  color: #fff;
  background-color: #527093;
  border-color: #4d6a8b;
}

.btn-vk:focus, .btn-vk.focus {
  box-shadow: 0 0 0 2px rgba(99, 131, 168, 0.5);
}

.btn-vk.disabled, .btn-vk:disabled {
  color: #fff;
  background-color: #6383a8;
  border-color: #6383a8;
}

.btn-vk:not(:disabled):not(.disabled):active, .btn-vk:not(:disabled):not(.disabled).active,
.show > .btn-vk.dropdown-toggle {
  color: #fff;
  background-color: #4d6a8b;
  border-color: #496482;
}

.btn-vk:not(:disabled):not(.disabled):active:focus, .btn-vk:not(:disabled):not(.disabled).active:focus,
.show > .btn-vk.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(99, 131, 168, 0.5);
}

.btn-rss {
  color: #fff;
  background-color: #ffa500;
  border-color: #ffa500;
}

.btn-rss:hover {
  color: #fff;
  background-color: #d98c00;
  border-color: #cc8400;
}

.btn-rss:focus, .btn-rss.focus {
  box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.5);
}

.btn-rss.disabled, .btn-rss:disabled {
  color: #fff;
  background-color: #ffa500;
  border-color: #ffa500;
}

.btn-rss:not(:disabled):not(.disabled):active, .btn-rss:not(:disabled):not(.disabled).active,
.show > .btn-rss.dropdown-toggle {
  color: #fff;
  background-color: #cc8400;
  border-color: #bf7c00;
}

.btn-rss:not(:disabled):not(.disabled):active:focus, .btn-rss:not(:disabled):not(.disabled).active:focus,
.show > .btn-rss.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.5);
}

.btn-flickr {
  color: #fff;
  background-color: #0063dc;
  border-color: #0063dc;
}

.btn-flickr:hover {
  color: #fff;
  background-color: #0052b6;
  border-color: #004ca9;
}

.btn-flickr:focus, .btn-flickr.focus {
  box-shadow: 0 0 0 2px rgba(0, 99, 220, 0.5);
}

.btn-flickr.disabled, .btn-flickr:disabled {
  color: #fff;
  background-color: #0063dc;
  border-color: #0063dc;
}

.btn-flickr:not(:disabled):not(.disabled):active, .btn-flickr:not(:disabled):not(.disabled).active,
.show > .btn-flickr.dropdown-toggle {
  color: #fff;
  background-color: #004ca9;
  border-color: #00469c;
}

.btn-flickr:not(:disabled):not(.disabled):active:focus, .btn-flickr:not(:disabled):not(.disabled).active:focus,
.show > .btn-flickr.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(0, 99, 220, 0.5);
}

.btn-bitbucket {
  color: #fff;
  background-color: #0052cc;
  border-color: #0052cc;
}

.btn-bitbucket:hover {
  color: #fff;
  background-color: #0043a6;
  border-color: #003e99;
}

.btn-bitbucket:focus, .btn-bitbucket.focus {
  box-shadow: 0 0 0 2px rgba(0, 82, 204, 0.5);
}

.btn-bitbucket.disabled, .btn-bitbucket:disabled {
  color: #fff;
  background-color: #0052cc;
  border-color: #0052cc;
}

.btn-bitbucket:not(:disabled):not(.disabled):active, .btn-bitbucket:not(:disabled):not(.disabled).active,
.show > .btn-bitbucket.dropdown-toggle {
  color: #fff;
  background-color: #003e99;
  border-color: #00388c;
}

.btn-bitbucket:not(:disabled):not(.disabled):active:focus, .btn-bitbucket:not(:disabled):not(.disabled).active:focus,
.show > .btn-bitbucket.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(0, 82, 204, 0.5);
}

.btn-blue {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-blue:hover {
  color: #fff;
  background-color: #316cbe;
  border-color: #2f66b3;
}

.btn-blue:focus, .btn-blue.focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-blue.disabled, .btn-blue:disabled {
  color: #fff;
  background-color: #467fcf;
  border-color: #467fcf;
}

.btn-blue:not(:disabled):not(.disabled):active, .btn-blue:not(:disabled):not(.disabled).active,
.show > .btn-blue.dropdown-toggle {
  color: #fff;
  background-color: #2f66b3;
  border-color: #2c60a9;
}

.btn-blue:not(:disabled):not(.disabled):active:focus, .btn-blue:not(:disabled):not(.disabled).active:focus,
.show > .btn-blue.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-indigo {
  color: #fff;
  background-color: #6574cd;
  border-color: #6574cd;
}

.btn-indigo:hover {
  color: #fff;
  background-color: #485ac4;
  border-color: #3f51c1;
}

.btn-indigo:focus, .btn-indigo.focus {
  box-shadow: 0 0 0 2px rgba(101, 116, 205, 0.5);
}

.btn-indigo.disabled, .btn-indigo:disabled {
  color: #fff;
  background-color: #6574cd;
  border-color: #6574cd;
}

.btn-indigo:not(:disabled):not(.disabled):active, .btn-indigo:not(:disabled):not(.disabled).active,
.show > .btn-indigo.dropdown-toggle {
  color: #fff;
  background-color: #3f51c1;
  border-color: #3b4db7;
}

.btn-indigo:not(:disabled):not(.disabled):active:focus, .btn-indigo:not(:disabled):not(.disabled).active:focus,
.show > .btn-indigo.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(101, 116, 205, 0.5);
}

.btn-purple {
  color: #fff;
  background-color: #a55eea;
  border-color: #a55eea;
}

.btn-purple:hover {
  color: #fff;
  background-color: #923ce6;
  border-color: #8c31e4;
}

.btn-purple:focus, .btn-purple.focus {
  box-shadow: 0 0 0 2px rgba(165, 94, 234, 0.5);
}

.btn-purple.disabled, .btn-purple:disabled {
  color: #fff;
  background-color: #a55eea;
  border-color: #a55eea;
}

.btn-purple:not(:disabled):not(.disabled):active, .btn-purple:not(:disabled):not(.disabled).active,
.show > .btn-purple.dropdown-toggle {
  color: #fff;
  background-color: #8c31e4;
  border-color: #8526e3;
}

.btn-purple:not(:disabled):not(.disabled):active:focus, .btn-purple:not(:disabled):not(.disabled).active:focus,
.show > .btn-purple.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(165, 94, 234, 0.5);
}

.btn-pink {
  color: #fff;
  background-color: #f66d9b;
  border-color: #f66d9b;
}

.btn-pink:hover {
  color: #fff;
  background-color: #f44982;
  border-color: #f33d7a;
}

.btn-pink:focus, .btn-pink.focus {
  box-shadow: 0 0 0 2px rgba(246, 109, 155, 0.5);
}

.btn-pink.disabled, .btn-pink:disabled {
  color: #fff;
  background-color: #f66d9b;
  border-color: #f66d9b;
}

.btn-pink:not(:disabled):not(.disabled):active, .btn-pink:not(:disabled):not(.disabled).active,
.show > .btn-pink.dropdown-toggle {
  color: #fff;
  background-color: #f33d7a;
  border-color: #f23172;
}

.btn-pink:not(:disabled):not(.disabled):active:focus, .btn-pink:not(:disabled):not(.disabled).active:focus,
.show > .btn-pink.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(246, 109, 155, 0.5);
}

.btn-red {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-red:hover {
  color: #fff;
  background-color: #ac1b1a;
  border-color: #a11918;
}

.btn-red:focus, .btn-red.focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-red.disabled, .btn-red:disabled {
  color: #fff;
  background-color: #cd201f;
  border-color: #cd201f;
}

.btn-red:not(:disabled):not(.disabled):active, .btn-red:not(:disabled):not(.disabled).active,
.show > .btn-red.dropdown-toggle {
  color: #fff;
  background-color: #a11918;
  border-color: #961717;
}

.btn-red:not(:disabled):not(.disabled):active:focus, .btn-red:not(:disabled):not(.disabled).active:focus,
.show > .btn-red.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-orange {
  color: #fff;
  background-color: #fd9644;
  border-color: #fd9644;
}

.btn-orange:hover {
  color: #fff;
  background-color: #fd811e;
  border-color: #fc7a12;
}

.btn-orange:focus, .btn-orange.focus {
  box-shadow: 0 0 0 2px rgba(253, 150, 68, 0.5);
}

.btn-orange.disabled, .btn-orange:disabled {
  color: #fff;
  background-color: #fd9644;
  border-color: #fd9644;
}

.btn-orange:not(:disabled):not(.disabled):active, .btn-orange:not(:disabled):not(.disabled).active,
.show > .btn-orange.dropdown-toggle {
  color: #fff;
  background-color: #fc7a12;
  border-color: #fc7305;
}

.btn-orange:not(:disabled):not(.disabled):active:focus, .btn-orange:not(:disabled):not(.disabled).active:focus,
.show > .btn-orange.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(253, 150, 68, 0.5);
}

.btn-yellow {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-yellow:hover {
  color: #fff;
  background-color: #cea70c;
  border-color: #c29d0b;
}

.btn-yellow:focus, .btn-yellow.focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-yellow.disabled, .btn-yellow:disabled {
  color: #fff;
  background-color: #f1c40f;
  border-color: #f1c40f;
}

.btn-yellow:not(:disabled):not(.disabled):active, .btn-yellow:not(:disabled):not(.disabled).active,
.show > .btn-yellow.dropdown-toggle {
  color: #fff;
  background-color: #c29d0b;
  border-color: #b6940b;
}

.btn-yellow:not(:disabled):not(.disabled):active:focus, .btn-yellow:not(:disabled):not(.disabled).active:focus,
.show > .btn-yellow.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-green {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-green:hover {
  color: #fff;
  background-color: #4b9400;
  border-color: #448700;
}

.btn-green:focus, .btn-green.focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-green.disabled, .btn-green:disabled {
  color: #fff;
  background-color: #5eba00;
  border-color: #5eba00;
}

.btn-green:not(:disabled):not(.disabled):active, .btn-green:not(:disabled):not(.disabled).active,
.show > .btn-green.dropdown-toggle {
  color: #fff;
  background-color: #448700;
  border-color: #3e7a00;
}

.btn-green:not(:disabled):not(.disabled):active:focus, .btn-green:not(:disabled):not(.disabled).active:focus,
.show > .btn-green.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-teal {
  color: #fff;
  background-color: #2bcbba;
  border-color: #2bcbba;
}

.btn-teal:hover {
  color: #fff;
  background-color: #24ab9d;
  border-color: #22a193;
}

.btn-teal:focus, .btn-teal.focus {
  box-shadow: 0 0 0 2px rgba(43, 203, 186, 0.5);
}

.btn-teal.disabled, .btn-teal:disabled {
  color: #fff;
  background-color: #2bcbba;
  border-color: #2bcbba;
}

.btn-teal:not(:disabled):not(.disabled):active, .btn-teal:not(:disabled):not(.disabled).active,
.show > .btn-teal.dropdown-toggle {
  color: #fff;
  background-color: #22a193;
  border-color: #20968a;
}

.btn-teal:not(:disabled):not(.disabled):active:focus, .btn-teal:not(:disabled):not(.disabled).active:focus,
.show > .btn-teal.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(43, 203, 186, 0.5);
}

.btn-cyan {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-cyan:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-cyan:focus, .btn-cyan.focus {
  box-shadow: 0 0 0 2px rgba(23, 162, 184, 0.5);
}

.btn-cyan.disabled, .btn-cyan:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-cyan:not(:disabled):not(.disabled):active, .btn-cyan:not(:disabled):not(.disabled).active,
.show > .btn-cyan.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-cyan:not(:disabled):not(.disabled):active:focus, .btn-cyan:not(:disabled):not(.disabled).active:focus,
.show > .btn-cyan.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(23, 162, 184, 0.5);
}

.btn-white {
  color: #495057;
  background-color: #fff;
  border-color: #fff;
}

.btn-white:hover {
  color: #495057;
  background-color: #ececec;
  border-color: #e6e5e5;
}

.btn-white:focus, .btn-white.focus {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-white.disabled, .btn-white:disabled {
  color: #495057;
  background-color: #fff;
  border-color: #fff;
}

.btn-white:not(:disabled):not(.disabled):active, .btn-white:not(:disabled):not(.disabled).active,
.show > .btn-white.dropdown-toggle {
  color: #495057;
  background-color: #e6e5e5;
  border-color: #dfdfdf;
}

.btn-white:not(:disabled):not(.disabled):active:focus, .btn-white:not(:disabled):not(.disabled).active:focus,
.show > .btn-white.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-gray {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-gray:hover {
  color: #fff;
  background-color: #727b84;
  border-color: #6c757d;
}

.btn-gray:focus, .btn-gray.focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-gray.disabled, .btn-gray:disabled {
  color: #fff;
  background-color: #868e96;
  border-color: #868e96;
}

.btn-gray:not(:disabled):not(.disabled):active, .btn-gray:not(:disabled):not(.disabled).active,
.show > .btn-gray.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #666e76;
}

.btn-gray:not(:disabled):not(.disabled):active:focus, .btn-gray:not(:disabled):not(.disabled).active:focus,
.show > .btn-gray.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-gray-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-gray-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-gray-dark:focus, .btn-gray-dark.focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-gray-dark.disabled, .btn-gray-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-gray-dark:not(:disabled):not(.disabled):active, .btn-gray-dark:not(:disabled):not(.disabled).active,
.show > .btn-gray-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-gray-dark:not(:disabled):not(.disabled):active:focus, .btn-gray-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-gray-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-azure {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-azure:hover {
  color: #fff;
  background-color: #219af0;
  border-color: #1594ef;
}

.btn-azure:focus, .btn-azure.focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-azure.disabled, .btn-azure:disabled {
  color: #fff;
  background-color: #45aaf2;
  border-color: #45aaf2;
}

.btn-azure:not(:disabled):not(.disabled):active, .btn-azure:not(:disabled):not(.disabled).active,
.show > .btn-azure.dropdown-toggle {
  color: #fff;
  background-color: #1594ef;
  border-color: #108ee7;
}

.btn-azure:not(:disabled):not(.disabled):active:focus, .btn-azure:not(:disabled):not(.disabled).active:focus,
.show > .btn-azure.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-lime {
  color: #fff;
  background-color: #7bd235;
  border-color: #7bd235;
}

.btn-lime:hover {
  color: #fff;
  background-color: #69b829;
  border-color: #63ad27;
}

.btn-lime:focus, .btn-lime.focus {
  box-shadow: 0 0 0 2px rgba(123, 210, 53, 0.5);
}

.btn-lime.disabled, .btn-lime:disabled {
  color: #fff;
  background-color: #7bd235;
  border-color: #7bd235;
}

.btn-lime:not(:disabled):not(.disabled):active, .btn-lime:not(:disabled):not(.disabled).active,
.show > .btn-lime.dropdown-toggle {
  color: #fff;
  background-color: #63ad27;
  border-color: #5da324;
}

.btn-lime:not(:disabled):not(.disabled):active:focus, .btn-lime:not(:disabled):not(.disabled).active:focus,
.show > .btn-lime.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px rgba(123, 210, 53, 0.5);
}

.btn-option {
  background: transparent;
  color: #9aa0ac;
}

.btn-option:hover {
  color: #6e7687;
}

.btn-option:focus {
  box-shadow: none;
  color: #6e7687;
}

.btn-sm, .btn-group-sm > .btn {
  font-size: 0.75rem;
  min-width: 1.625rem;
}

.btn-lg, .btn-group-lg > .btn {
  font-size: 1rem;
  min-width: 2.75rem;
  font-weight: 400;
}

.btn-list {
  margin-bottom: -.5rem;
  font-size: 0;
}

.btn-list > .btn,
.btn-list > .dropdown {
  margin-bottom: .5rem;
}

.btn-list > .btn:not(:last-child),
.btn-list > .dropdown:not(:last-child) {
  margin-right: .5rem;
}

.btn-loading {
  color: transparent !important;
  pointer-events: none;
  position: relative;
}

.btn-loading:after {
  content: '';
  -webkit-animation: loader 500ms infinite linear;
  animation: loader 500ms infinite linear;
  border: 2px solid #fff;
  border-radius: 50%;
  border-right-color: transparent !important;
  border-top-color: transparent !important;
  display: block;
  height: 1.4em;
  width: 1.4em;
  position: absolute;
  left: calc(50% - (1.4em / 2));
  top: calc(50% - (1.4em / 2));
  -webkit-transform-origin: center;
  transform-origin: center;
  position: absolute !important;
}

.btn-loading.btn-sm:after, .btn-group-sm > .btn-loading.btn:after {
  height: 1em;
  width: 1em;
  left: calc(50% - (1em / 2));
  top: calc(50% - (1em / 2));
}

.btn-loading.btn-secondary:after {
  border-color: #495057;
}

.alert {
  font-size: 0.9375rem;
}

.alert-icon {
  padding-left: 3rem;
}

.alert-icon > i {
  color: inherit !important;
  font-size: 1rem;
  position: absolute;
  top: 1rem;
  left: 1rem;
}

.alert-avatar {
  padding-left: 3.75rem;
}

.alert-avatar .avatar {
  position: absolute;
  top: .5rem;
  left: .75rem;
}

.close {
  font-size: 1rem;
  line-height: 1.5;
  transition: .3s color;
}

.close:before {
  content: '\ea00';
  font-family: "feather";
}

.badge {
  color: #fff;
}

.badge-default {
  background: #e9ecef;
  color: #868e96;
}

.table thead th, .text-wrap table thead th {
  border-top: 0;
  border-bottom-width: 1px;
  padding-top: .5rem;
  padding-bottom: .5rem;
}

.table th, .text-wrap table th {
  color: #9aa0ac;
  text-transform: uppercase;
  font-size: 0.875rem;
  font-weight: 400;
}

.table-md th,
.table-md td {
  padding: .5rem;
}

.table-vcenter td,
.table-vcenter th {
  vertical-align: middle;
}

.table-center td,
.table-center th {
  text-align: center;
}

.table-striped tbody tr:nth-of-type(odd) {
  background: transparent;
}

.table-striped tbody tr:nth-of-type(even) {
  background-color: rgba(0, 0, 0, 0.02);
}

.table-calendar {
  margin: 0 0 .75rem;
}

.table-calendar td,
.table-calendar th {
  border: 0;
  text-align: center;
  padding: 0 !important;
  width: 14.28571429%;
  line-height: 2.5rem;
}

.table-calendar td {
  border-top: 0;
}

.table-calendar-link {
  line-height: 2rem;
  min-width: calc(2rem + 2px);
  display: inline-block;
  border-radius: 3px;
  background: #f8f9fa;
  color: #495057;
  font-weight: 600;
  transition: .3s background, .3s color;
  position: relative;
}

.table-calendar-link:before {
  content: '';
  width: 4px;
  height: 4px;
  position: absolute;
  left: .25rem;
  top: .25rem;
  border-radius: 50px;
  background: #467fcf;
}

.table-calendar-link:hover {
  color: #fff;
  text-decoration: none;
  background: #467fcf;
  transition: .3s background;
}

.table-calendar-link:hover:before {
  background: #fff;
}

.table-header {
  cursor: pointer;
  transition: .3s color;
}

.table-header:hover {
  color: #495057 !important;
}

.table-header:after {
  content: '\f0dc';
  font-family: FontAwesome;
  display: inline-block;
  margin-left: .5rem;
  font-size: .75rem;
}

.table-header-asc {
  color: #495057 !important;
}

.table-header-asc:after {
  content: '\f0de';
}

.table-header-desc {
  color: #495057 !important;
}

.table-header-desc:after {
  content: '\f0dd';
}

.page-breadcrumb {
  background: none;
  padding: 0;
  margin: 1rem 0 0;
  font-size: 0.875rem;
}

@media (min-width: 768px) {
  .page-breadcrumb {
    margin: -.5rem 0 0;
  }
}

.page-breadcrumb .breadcrumb-item {
  color: #9aa0ac;
}

.page-breadcrumb .breadcrumb-item.active {
  color: #6e7687;
}

.pagination-simple .page-item .page-link {
  background: none;
  border: none;
}

.pagination-simple .page-item.active .page-link {
  color: #495057;
  font-weight: 700;
}

.pagination-pager .page-prev {
  margin-right: auto;
}

.pagination-pager .page-next {
  margin-left: auto;
}

.page-total-text {
  margin-right: 1rem;
  -ms-flex-item-align: center;
  align-self: center;
  color: #6e7687;
}

.card {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  position: relative;
  margin-bottom: 1.5rem;
  width: 100%;
}

.card .card {
  box-shadow: none;
}

@media print {
  .card {
    box-shadow: none;
    border: none;
  }
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  margin: 0;
  padding: 1.5rem 1.5rem;
  position: relative;
}

.card-body + .card-body {
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.card-body > :last-child {
  margin-bottom: 0;
}

@media print {
  .card-body {
    padding: 0;
  }
}

.card-body-scrollable {
  overflow: auto;
}

.card-footer,
.card-bottom {
  padding: 1rem 1.5rem;
  background: none;
}

.card-footer {
  border-top: 1px solid rgba(0, 40, 100, 0.12);
  color: #6e7687;
}

.card-header {
  background: none;
  padding: 0.5rem 1.5rem;
  display: -ms-flexbox;
  display: flex;
  min-height: 3.5rem;
  -ms-flex-align: center;
  align-items: center;
}

.card-header .card-title {
  margin-bottom: 0;
}

.card-header.border-0 + .card-body {
  padding-top: 0;
}

@media print {
  .card-header {
    display: none;
  }
}

.card-img-top {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.card-img-overlay {
  background-color: rgba(0, 0, 0, 0.4);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-title {
  font-size: 1.125rem;
  line-height: 1.2;
  font-weight: 400;
  margin-bottom: 1.5rem;
}

.card-title a {
  color: inherit;
}

.card-title:only-child {
  margin-bottom: 0;
}

.card-title small,
.card-subtitle {
  color: #9aa0ac;
  font-size: 0.875rem;
  display: block;
  margin: -.75rem 0 1rem;
  line-height: 1.1;
  font-weight: 400;
}

.card-table {
  margin-bottom: 0;
}

.card-table tr:first-child td,
.card-table tr:first-child th {
  border-top: 0;
}

.card-table tr td:first-child,
.card-table tr th:first-child {
  padding-left: 1.5rem;
}

.card-table tr td:last-child,
.card-table tr th:last-child {
  padding-right: 1.5rem;
}

.card-body + .card-table {
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.card-profile .card-header {
  height: 9rem;
  background-size: cover;
}

.card-profile-img {
  max-width: 6rem;
  margin-top: -5rem;
  margin-bottom: 1rem;
  border: 3px solid #fff;
  border-radius: 100%;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.card-link + .card-link {
  margin-left: 1rem;
}

.card-body + .card-list-group {
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.card-list-group .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.card-list-group .list-group-item:last-child {
  border-bottom: 0;
}

.card-list-group .list-group-item:first-child {
  border-top: 0;
}

.card-header-tabs {
  margin: -1.25rem 0;
  border-bottom: 0;
  line-height: 2rem;
}

.card-header-tabs .nav-item {
  margin-bottom: 1px;
}

.card-header-pills {
  margin: -.75rem 0;
}

.card-aside {
  -ms-flex-direction: row;
  flex-direction: row;
}

.card-aside-column {
  min-width: 5rem;
  width: 30%;
  -ms-flex: 0 0 30%;
  flex: 0 0 30%;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  background: no-repeat center/cover;
}

.card-value {
  font-size: 2.5rem;
  line-height: 3.4rem;
  height: 3.4rem;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  font-weight: 400;
}

.card-value i {
  vertical-align: middle;
}

.card-chart-bg {
  height: 4rem;
  margin-top: -1rem;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.card-options {
  margin-left: auto;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-order: 100;
  order: 100;
  margin-right: -.5rem;
  color: #9aa0ac;
  -ms-flex-item-align: center;
  align-self: center;
}

.card-options a:not(.btn) {
  margin-left: .5rem;
  color: #9aa0ac;
  display: inline-block;
  min-width: 1rem;
}

.card-options a:not(.btn):hover {
  text-decoration: none;
  color: #6e7687;
}

.card-options a:not(.btn) i {
  font-size: 1rem;
  vertical-align: middle;
}

.card-options .dropdown-toggle:after {
  display: none;
}

/*
Card options
 */
.card-collapsed > :not(.card-header):not(.card-status) {
  display: none;
}

.card-collapsed .card-options-collapse i:before {
  content: '\e92d';
}

.card-fullscreen .card-options-fullscreen i:before {
  content: '\e992';
}

.card-fullscreen .card-options-remove {
  display: none;
}

/*
Card maps
 */
.card-map {
  height: 15rem;
  background: #e9ecef;
}

.card-map-placeholder {
  background: no-repeat center;
}

/**
Card tabs
 */
.card-tabs {
  display: -ms-flexbox;
  display: flex;
}

.card-tabs-bottom .card-tabs-item {
  border: 0;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.card-tabs-bottom .card-tabs-item.active {
  border-top-color: #fff;
}

.card-tabs-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  display: block;
  padding: 1rem 1.5rem;
  border-bottom: 1px solid rgba(0, 40, 100, 0.12);
  color: inherit;
  overflow: hidden;
}

a.card-tabs-item {
  background: #fafbfc;
}

a.card-tabs-item:hover {
  text-decoration: none;
  color: inherit;
}

a.card-tabs-item:focus {
  z-index: 1;
}

a.card-tabs-item.active {
  background: #fff;
  border-bottom-color: #fff;
}

.card-tabs-item + .card-tabs-item {
  border-left: 1px solid rgba(0, 40, 100, 0.12);
}

/**
Card status
 */
.card-status {
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  height: 3px;
  border-radius: 3px 3px 0 0;
  background: rgba(0, 40, 100, 0.12);
}

.card-status-left {
  right: auto;
  bottom: 0;
  height: auto;
  width: 3px;
  border-radius: 3px 0 0 3px;
}

/**
Card icon
 */
.card-icon {
  width: 3rem;
  font-size: 2.5rem;
  line-height: 3rem;
  text-align: center;
}

/**
Card fullscreen
 */
.card-fullscreen {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  margin: 0;
}

/**
Card alert
 */
.card-alert {
  border-radius: 0;
  margin: -1px -1px 0;
}

.card-category {
  font-size: 0.875rem;
  text-transform: uppercase;
  text-align: center;
  font-weight: 600;
  letter-spacing: .05em;
  margin: 0 0 .5rem;
}

.popover {
  -webkit-filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.1));
  filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.1));
}

.popover.bs-popover-top, .popover.bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.625rem;
}

.popover .arrow {
  margin-left: calc(.25rem + 2px);
}

.dropdown {
  display: inline-block;
}

.dropdown-menu {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  min-width: 12rem;
}

.dropdown-item {
  color: #6e7687;
}

.dropdown-menu-arrow:before {
  position: absolute;
  top: -6px;
  left: 12px;
  display: inline-block;
  border-right: 5px solid transparent;
  border-bottom: 5px solid rgba(0, 40, 100, 0.12);
  border-left: 5px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}

.dropdown-menu-arrow:after {
  position: absolute;
  top: -5px;
  left: 12px;
  display: inline-block;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #fff;
  border-left: 5px solid transparent;
  content: '';
}

.dropdown-menu-arrow.dropdown-menu-right:before, .dropdown-menu-arrow.dropdown-menu-right:after {
  left: auto;
  right: 12px;
}

.dropdown-toggle {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
}

.dropdown-toggle:after {
  vertical-align: 0.155em;
}

.dropdown-toggle:empty:after {
  margin-left: 0;
}

.dropdown-icon {
  color: #9aa0ac;
  margin-right: .5rem;
  margin-left: -.5rem;
  width: 1em;
  display: inline-block;
  text-align: center;
  vertical-align: -1px;
}

.list-inline-dots .list-inline-item + .list-inline-item:before {
  content: '· ';
  margin-left: -2px;
  margin-right: 3px;
}

.list-separated-item {
  padding: 1rem 0;
}

.list-separated-item:first-child {
  padding-top: 0;
}

.list-separated-item:last-child {
  padding-bottom: 0;
}

.list-separated-item + .list-separated-item {
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}

.list-group-item.active .icon {
  color: inherit !important;
}

.list-group-transparent .list-group-item {
  background: none;
  border: 0;
  padding: .5rem 1rem;
  border-radius: 3px;
}

.list-group-transparent .list-group-item.active {
  background: rgba(70, 127, 207, 0.06);
  font-weight: 600;
}

.avatar {
  width: 2rem;
  height: 2rem;
  line-height: 2rem;
  border-radius: 50%;
  display: inline-block;
  background: #ced4da no-repeat center/cover;
  position: relative;
  text-align: center;
  color: #868e96;
  font-weight: 600;
  vertical-align: bottom;
  font-size: .875rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.avatar i {
  font-size: 125%;
  vertical-align: sub;
}

.avatar-status {
  position: absolute;
  right: -2px;
  bottom: -2px;
  width: .75rem;
  height: .75rem;
  border: 2px solid #fff;
  background: #868e96;
  border-radius: 50%;
}

.avatar-sm {
  width: 1.5rem;
  height: 1.5rem;
  line-height: 1.5rem;
  font-size: .75rem;
}

.avatar-md {
  width: 2.5rem;
  height: 2.5rem;
  line-height: 2.5rem;
  font-size: 1rem;
}

.avatar-lg {
  width: 3rem;
  height: 3rem;
  line-height: 3rem;
  font-size: 1.25rem;
}

.avatar-xl {
  width: 4rem;
  height: 4rem;
  line-height: 4rem;
  font-size: 1.75rem;
}

.avatar-xxl {
  width: 5rem;
  height: 5rem;
  line-height: 5rem;
  font-size: 2rem;
}

.avatar-placeholder {
  background: #ced4da url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134"><path fill="#868e96" d="M65.92 66.34h2.16c14.802.42 30.928 6.062 29.283 20.35l-1.618 13.32c-.844 6.815-5.208 7.828-13.972 7.866H52.23c-8.764-.038-13.13-1.05-13.973-7.865l-1.62-13.32C34.994 72.4 51.12 66.76 65.92 66.34zM49.432 43.934c0-9.82 7.99-17.81 17.807-17.81 9.82 0 17.81 7.99 17.81 17.81 0 9.82-7.99 17.807-17.81 17.807-9.82 0-17.808-7.987-17.808-17.806z"/></svg>') no-repeat center/80%;
}

.avatar-list {
  margin: 0 0 -.5rem;
  padding: 0;
  font-size: 0;
}

.avatar-list .avatar {
  margin-bottom: .5rem;
}

.avatar-list .avatar:not(:last-child) {
  margin-right: .5rem;
}

.avatar-list-stacked .avatar {
  margin-right: -.8em !important;
}

.avatar-list-stacked .avatar {
  box-shadow: 0 0 0 2px #fff;
}

.avatar-blue {
  background-color: #c8d9f1;
  color: #467fcf;
}

.avatar-indigo {
  background-color: #d1d5f0;
  color: #6574cd;
}

.avatar-purple {
  background-color: #e4cff9;
  color: #a55eea;
}

.avatar-pink {
  background-color: #fcd3e1;
  color: #f66d9b;
}

.avatar-red {
  background-color: #f0bcbc;
  color: #cd201f;
}

.avatar-orange {
  background-color: #fee0c7;
  color: #fd9644;
}

.avatar-yellow {
  background-color: #fbedb7;
  color: #f1c40f;
}

.avatar-green {
  background-color: #cfeab3;
  color: #5eba00;
}

.avatar-teal {
  background-color: #bfefea;
  color: #2bcbba;
}

.avatar-cyan {
  background-color: #b9e3ea;
  color: #17a2b8;
}

.avatar-white {
  background-color: white;
  color: #fff;
}

.avatar-gray {
  background-color: #dbdde0;
  color: #868e96;
}

.avatar-gray-dark {
  background-color: #c2c4c6;
  color: #343a40;
}

.avatar-azure {
  background-color: #c7e6fb;
  color: #45aaf2;
}

.avatar-lime {
  background-color: #d7f2c2;
  color: #7bd235;
}

.product-price {
  font-size: 1rem;
}

.product-price strong {
  font-size: 1.5rem;
}

@-webkit-keyframes indeterminate {
  0% {
    left: -35%;
    right: 100%;
  }
  100%, 60% {
    left: 100%;
    right: -90%;
  }
}

@keyframes indeterminate {
  0% {
    left: -35%;
    right: 100%;
  }
  100%, 60% {
    left: 100%;
    right: -90%;
  }
}

@-webkit-keyframes indeterminate-short {
  0% {
    left: -200%;
    right: 100%;
  }
  100%, 60% {
    left: 107%;
    right: -8%;
  }
}

@keyframes indeterminate-short {
  0% {
    left: -200%;
    right: 100%;
  }
  100%, 60% {
    left: 107%;
    right: -8%;
  }
}

.progress {
  position: relative;
}

.progress-xs,
.progress-xs .progress-bar {
  height: .25rem;
}

.progress-sm,
.progress-sm .progress-bar {
  height: .5rem;
}

.progress-bar-indeterminate:after, .progress-bar-indeterminate:before {
  content: '';
  position: absolute;
  background-color: inherit;
  left: 0;
  will-change: left, right;
  top: 0;
  bottom: 0;
}

.progress-bar-indeterminate:before {
  -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
  animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.progress-bar-indeterminate:after {
  -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
  animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
  -webkit-animation-delay: 1.15s;
  animation-delay: 1.15s;
}

@-webkit-keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loader {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/**
Dimmer
*/
.dimmer {
  position: relative;
}

.dimmer .loader {
  display: none;
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.dimmer.active .loader {
  display: block;
}

.dimmer.active .dimmer-content {
  opacity: .04;
  pointer-events: none;
}

/**
Loader
*/
.loader {
  display: block;
  position: relative;
  height: 2.5rem;
  width: 2.5rem;
  color: #467fcf;
}

.loader:before, .loader:after {
  width: 2.5rem;
  height: 2.5rem;
  margin: -1.25rem 0 0 -1.25rem;
  position: absolute;
  content: '';
  top: 50%;
  left: 50%;
}

.loader:before {
  border-radius: 50%;
  border: 3px solid currentColor;
  opacity: .15;
}

.loader:after {
  -webkit-animation: loader .6s linear;
  animation: loader .6s linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  border-radius: 50%;
  border: 3px solid;
  border-color: transparent;
  border-top-color: currentColor;
  box-shadow: 0 0 0 1px transparent;
}

.icons-list {
  list-style: none;
  margin: 0 -1px -1px 0;
  padding: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.icons-list > li {
  -ms-flex: 1 0 4rem;
  flex: 1 0 4rem;
}

.icons-list-wrap {
  overflow: hidden;
}

.icons-list-item {
  text-align: center;
  height: 4rem;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  border-right: 1px solid rgba(0, 40, 100, 0.12);
  border-bottom: 1px solid rgba(0, 40, 100, 0.12);
}

.icons-list-item i {
  font-size: 1.25rem;
}

.img-gallery {
  margin-right: -.25rem;
  margin-left: -.25rem;
  margin-bottom: -.5rem;
}

.img-gallery > .col,
.img-gallery > [class*="col-"] {
  padding-left: .25rem;
  padding-right: .25rem;
  padding-bottom: .5rem;
}

.link-overlay {
  position: relative;
}

.link-overlay:hover .link-overlay-bg {
  opacity: 1;
}

.link-overlay-bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(70, 127, 207, 0.8);
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  font-size: 1.25rem;
  opacity: 0;
  transition: .3s opacity;
}

.media-icon {
  width: 2rem;
  height: 2rem;
  line-height: 2rem;
  text-align: center;
  border-radius: 100%;
}

.media-list {
  margin: 0;
  padding: 0;
  list-style: none;
}

textarea[cols] {
  height: auto;
}

.form-group {
  display: block;
}

.form-label {
  display: block;
  margin-bottom: .375rem;
  font-weight: 600;
  font-size: 0.875rem;
}

.form-label-small {
  float: right;
  font-weight: 400;
  font-size: 87.5%;
}

.form-footer {
  margin-top: 2rem;
}

.custom-control {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.custom-controls-stacked .custom-control {
  margin-bottom: .25rem;
}

.custom-control-label {
  vertical-align: middle;
}

.custom-control-label:before {
  border: 1px solid rgba(0, 40, 100, 0.12);
  background-color: #fff;
  background-size: .5rem;
}

.custom-control-description {
  line-height: 1.5rem;
}

.input-group-prepend,
.input-group-append,
.input-group-btn {
  font-size: 0.9375rem;
}

.input-group-prepend > .btn,
.input-group-append > .btn,
.input-group-btn > .btn {
  height: 100%;
  border-color: rgba(0, 40, 100, 0.12);
}

.input-group-prepend > .input-group-text {
  border-right: 0;
}

.input-group-append > .input-group-text {
  border-left: 0;
}

/**
Icon input
 */
.input-icon {
  position: relative;
}

.input-icon .form-control:not(:last-child) {
  padding-right: 2.5rem;
}

.input-icon .form-control:not(:first-child) {
  padding-left: 2.5rem;
}

.input-icon-addon {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  color: #9aa0ac;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  min-width: 2.5rem;
  pointer-events: none;
}

.input-icon-addon:last-child {
  left: auto;
  right: 0;
}

.form-fieldset {
  background: #f8f9fa;
  border: 1px solid #e9ecef;
  padding: 1rem;
  border-radius: 3px;
  margin-bottom: 1rem;
}

.form-required {
  color: #cd201f;
}

.form-required:before {
  content: ' ';
}

.state-valid {
  padding-right: 2rem;
  background: url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%235eba00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'><polyline points='20 6 9 17 4 12'></polyline></svg>") no-repeat center right 0.5rem/1rem;
}

.state-invalid {
  padding-right: 2rem;
  background: url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23cd201f' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'><line x1='18' y1='6' x2='6' y2='18'></line><line x1='6' y1='6' x2='18' y2='18'></line></svg>") no-repeat center right 0.5rem/1rem;
}

.form-help {
  display: inline-block;
  width: 1rem;
  height: 1rem;
  text-align: center;
  line-height: 1rem;
  color: #9aa0ac;
  background: #f8f9fa;
  border-radius: 50%;
  font-size: 0.75rem;
  transition: .3s background-color, .3s color;
  text-decoration: none;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.form-help:hover, .form-help[aria-describedby] {
  background: #467fcf;
  color: #fff;
}

.sparkline {
  display: inline-block;
  height: 2rem;
}

.jqstooltip {
  box-sizing: content-box;
  font-family: inherit !important;
  background: #333 !important;
  border: none !important;
  border-radius: 3px;
  font-size: 11px !important;
  font-weight: 700 !important;
  line-height: 1 !important;
  padding: 6px !important;
}

.jqstooltip .jqsfield {
  font: inherit !important;
}

.social-links li a {
  background: #f8f8f8;
  border-radius: 50%;
  color: #9aa0ac;
  display: inline-block;
  height: 1.75rem;
  width: 1.75rem;
  line-height: 1.75rem;
  text-align: center;
}

.map,
.chart {
  position: relative;
  padding-top: 56.25%;
}

.map-square,
.chart-square {
  padding-top: 100%;
}

.map-content,
.chart-content {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.map-header {
  margin-top: -1.5rem;
  margin-bottom: 1.5rem;
  height: 15rem;
  position: relative;
  margin-bottom: -1.5rem;
}

.map-header:before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 10rem;
  background: linear-gradient(to bottom, rgba(245, 247, 251, 0) 5%, #f5f7fb 95%);
  pointer-events: none;
}

.map-header-layer {
  height: 100%;
}

.map-static {
  height: 120px;
  width: 100%;
  max-width: 640px;
  background-position: center center;
  background-size: 640px 120px;
}

@-webkit-keyframes status-pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: .32;
  }
}

@keyframes status-pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: .32;
  }
}

.status-icon {
  content: '';
  width: 0.5rem;
  height: 0.5rem;
  display: inline-block;
  background: currentColor;
  border-radius: 50%;
  -webkit-transform: translateY(-1px);
  transform: translateY(-1px);
  margin-right: .375rem;
  vertical-align: middle;
}

.status-animated {
  -webkit-animation: 1s status-pulse infinite ease;
  animation: 1s status-pulse infinite ease;
}

.chart-circle {
  display: block;
  height: 8rem;
  width: 8rem;
  position: relative;
}

.chart-circle canvas {
  margin: 0 auto;
  display: block;
  max-width: 100%;
  max-height: 100%;
}

.chart-circle-xs {
  height: 2.5rem;
  width: 2.5rem;
  font-size: .8rem;
}

.chart-circle-sm {
  height: 4rem;
  width: 4rem;
  font-size: .8rem;
}

.chart-circle-lg {
  height: 10rem;
  width: 10rem;
  font-size: .8rem;
}

.chart-circle-value {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: column;
  flex-direction: column;
  line-height: 1;
}

.chart-circle-value small {
  display: block;
  color: #9aa0ac;
  font-size: 0.9375rem;
}

.chips {
  margin: 0 0 -.5rem;
}

.chips .chip {
  margin: 0 .5rem .5rem 0;
}

.chip {
  display: inline-block;
  height: 2rem;
  line-height: 2rem;
  font-size: 0.875rem;
  font-weight: 500;
  color: #6e7687;
  padding: 0 .75rem;
  border-radius: 1rem;
  background-color: #f8f9fa;
  transition: .3s background;
}

.chip .avatar {
  float: left;
  margin: 0 .5rem 0 -.75rem;
  height: 2rem;
  width: 2rem;
  border-radius: 50%;
}

a.chip:hover {
  color: inherit;
  text-decoration: none;
  background-color: #e9ecef;
}

.stamp {
  color: #fff;
  background: #868e96;
  display: inline-block;
  min-width: 2rem;
  height: 2rem;
  padding: 0 .25rem;
  line-height: 2rem;
  text-align: center;
  border-radius: 3px;
  font-weight: 600;
}

.stamp-md {
  min-width: 2.5rem;
  height: 2.5rem;
  line-height: 2.5rem;
}

.chat {
  outline: 0;
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: end;
  justify-content: flex-end;
  min-height: 100%;
}

.chat-line {
  padding: 0;
  text-align: right;
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row-reverse;
  flex-direction: row-reverse;
}

.chat-line + .chat-line {
  padding-top: 1rem;
}

.chat-message {
  position: relative;
  display: inline-block;
  background-color: #467fcf;
  color: #fff;
  font-size: 0.875rem;
  padding: .375rem .5rem;
  border-radius: 3px;
  white-space: normal;
  text-align: left;
  margin: 0 .5rem 0 2.5rem;
  line-height: 1.4;
}

.chat-message > :last-child {
  margin-bottom: 0 !important;
}

.chat-message:after {
  content: "";
  position: absolute;
  right: -5px;
  top: 7px;
  border-bottom: 6px solid transparent;
  border-left: 6px solid #467fcf;
  border-top: 6px solid transparent;
}

.chat-message img {
  max-width: 100%;
}

.chat-message p {
  margin-bottom: 1em;
}

.chat-line-friend {
  -ms-flex-direction: row;
  flex-direction: row;
}

.chat-line-friend + .chat-line-friend {
  margin-top: -.5rem;
}

.chat-line-friend + .chat-line-friend .chat-author {
  visibility: hidden;
}

.chat-line-friend + .chat-line-friend .chat-message:after {
  display: none;
}

.chat-line-friend .chat-message {
  background-color: #f3f3f3;
  color: #495057;
  margin-left: .5rem;
  margin-right: 2.5rem;
}

.chat-line-friend .chat-message:after {
  right: auto;
  left: -5px;
  border-left-width: 0;
  border-right: 5px solid #f3f3f3;
}

.example {
  padding: 1.5rem;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px 3px 0 0;
  font-size: 0.9375rem;
}

.example-bg {
  background: #f5f7fb;
}

.example + .highlight {
  border-top: none;
  margin-top: 0;
  border-radius: 0 0 3px 3px;
}

.highlight {
  margin: 1rem 0 2rem;
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  font-size: 0.9375rem;
  max-height: 40rem;
  overflow: auto;
  background: #fcfcfc;
}

.highlight pre {
  margin-bottom: 0;
  background-color: transparent;
}

.example-column {
  margin: 0 auto;
}

.example-column > .card:last-of-type {
  margin-bottom: 0;
}

.example-column-1 {
  max-width: 20rem;
}

.example-column-2 {
  max-width: 40rem;
}

.tag {
  font-size: 0.75rem;
  color: #6e7687;
  background-color: #e9ecef;
  border-radius: 3px;
  padding: 0 .5rem;
  line-height: 2em;
  display: -ms-inline-flexbox;
  display: inline-flex;
  cursor: default;
  font-weight: 400;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

a.tag {
  text-decoration: none;
  cursor: pointer;
  transition: .3s color, .3s background;
}

a.tag:hover {
  background-color: rgba(110, 118, 135, 0.2);
  color: inherit;
}

.tag-addon {
  display: inline-block;
  padding: 0 .5rem;
  color: inherit;
  text-decoration: none;
  background: rgba(0, 0, 0, 0.06);
  margin: 0 -.5rem 0 .5rem;
  text-align: center;
  min-width: 1.5rem;
}

.tag-addon:last-child {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.tag-addon i {
  vertical-align: middle;
  margin: 0 -.25rem;
}

a.tag-addon {
  text-decoration: none;
  cursor: pointer;
  transition: .3s color, .3s background;
}

a.tag-addon:hover {
  background: rgba(0, 0, 0, 0.16);
  color: inherit;
}

.tag-avatar {
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 3px 0 0 3px;
  margin: 0 .5rem 0 -.5rem;
}

.tag-blue {
  background-color: #467fcf;
  color: #fff;
}

.tag-indigo {
  background-color: #6574cd;
  color: #fff;
}

.tag-purple {
  background-color: #a55eea;
  color: #fff;
}

.tag-pink {
  background-color: #f66d9b;
  color: #fff;
}

.tag-red {
  background-color: #cd201f;
  color: #fff;
}

.tag-orange {
  background-color: #fd9644;
  color: #fff;
}

.tag-yellow {
  background-color: #f1c40f;
  color: #fff;
}

.tag-green {
  background-color: #5eba00;
  color: #fff;
}

.tag-teal {
  background-color: #2bcbba;
  color: #fff;
}

.tag-cyan {
  background-color: #17a2b8;
  color: #fff;
}

.tag-white {
  background-color: #fff;
  color: #fff;
}

.tag-gray {
  background-color: #868e96;
  color: #fff;
}

.tag-gray-dark {
  background-color: #343a40;
  color: #fff;
}

.tag-azure {
  background-color: #45aaf2;
  color: #fff;
}

.tag-lime {
  background-color: #7bd235;
  color: #fff;
}

.tag-primary {
  background-color: #467fcf;
  color: #fff;
}

.tag-secondary {
  background-color: #868e96;
  color: #fff;
}

.tag-success {
  background-color: #5eba00;
  color: #fff;
}

.tag-info {
  background-color: #45aaf2;
  color: #fff;
}

.tag-warning {
  background-color: #f1c40f;
  color: #fff;
}

.tag-danger {
  background-color: #cd201f;
  color: #fff;
}

.tag-light {
  background-color: #f8f9fa;
  color: #fff;
}

.tag-dark {
  background-color: #343a40;
  color: #fff;
}

.tag-rounded {
  border-radius: 50px;
}

.tag-rounded .tag-avatar {
  border-radius: 50px;
}

.tags {
  margin-bottom: -.5rem;
  font-size: 0;
}

.tags > .tag {
  margin-bottom: .5rem;
}

.tags > .tag:not(:last-child) {
  margin-right: .5rem;
}

.highlight .hll {
  background-color: #ffc;
}

.highlight .c {
  color: #999;
}

.highlight .k {
  color: #069;
}

.highlight .o {
  color: #555;
}

.highlight .cm {
  color: #999;
}

.highlight .cp {
  color: #099;
}

.highlight .c1 {
  color: #999;
}

.highlight .cs {
  color: #999;
}

.highlight .gd {
  background-color: #fcc;
  border: 1px solid #c00;
}

.highlight .ge {
  font-style: italic;
}

.highlight .gr {
  color: #f00;
}

.highlight .gh {
  color: #030;
}

.highlight .gi {
  background-color: #cfc;
  border: 1px solid #0c0;
}

.highlight .go {
  color: #aaa;
}

.highlight .gp {
  color: #009;
}

.highlight .gu {
  color: #030;
}

.highlight .gt {
  color: #9c6;
}

.highlight .kc {
  color: #069;
}

.highlight .kd {
  color: #069;
}

.highlight .kn {
  color: #069;
}

.highlight .kp {
  color: #069;
}

.highlight .kr {
  color: #069;
}

.highlight .kt {
  color: #078;
}

.highlight .m {
  color: #f60;
}

.highlight .s {
  color: #d44950;
}

.highlight .na {
  color: #4f9fcf;
}

.highlight .nb {
  color: #366;
}

.highlight .nc {
  color: #0a8;
}

.highlight .no {
  color: #360;
}

.highlight .nd {
  color: #99f;
}

.highlight .ni {
  color: #999;
}

.highlight .ne {
  color: #c00;
}

.highlight .nf {
  color: #c0f;
}

.highlight .nl {
  color: #99f;
}

.highlight .nn {
  color: #0cf;
}

.highlight .nt {
  color: #2f6f9f;
}

.highlight .nv {
  color: #033;
}

.highlight .ow {
  color: #000;
}

.highlight .w {
  color: #bbb;
}

.highlight .mf {
  color: #f60;
}

.highlight .mh {
  color: #f60;
}

.highlight .mi {
  color: #f60;
}

.highlight .mo {
  color: #f60;
}

.highlight .sb {
  color: #c30;
}

.highlight .sc {
  color: #c30;
}

.highlight .sd {
  font-style: italic;
  color: #c30;
}

.highlight .s2 {
  color: #c30;
}

.highlight .se {
  color: #c30;
}

.highlight .sh {
  color: #c30;
}

.highlight .si {
  color: #a00;
}

.highlight .sx {
  color: #c30;
}

.highlight .sr {
  color: #3aa;
}

.highlight .s1 {
  color: #c30;
}

.highlight .ss {
  color: #fc3;
}

.highlight .bp {
  color: #366;
}

.highlight .vc {
  color: #033;
}

.highlight .vg {
  color: #033;
}

.highlight .vi {
  color: #033;
}

.highlight .il {
  color: #f60;
}

.highlight .css .o,
.highlight .css .o + .nt,
.highlight .css .nt + .nt {
  color: #999;
}

.highlight .language-bash::before,
.highlight .language-sh::before {
  color: #009;
  content: "$ ";
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.highlight .language-powershell::before {
  color: #009;
  content: "PM> ";
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.carousel-item-background {
  content: '';
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.custom-range {
  -ms-flex-align: center;
  align-items: center;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: none;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  min-height: 2.375rem;
  overflow: hidden;
  padding: 0;
  border: 0;
}

.custom-range:focus {
  box-shadow: none;
  outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
  border-color: #467fcf;
  background-color: #467fcf;
}

.custom-range:focus::-moz-range-thumb {
  border-color: #467fcf;
  background-color: #467fcf;
}

.custom-range:focus::-ms-thumb {
  border-color: #467fcf;
  background-color: #467fcf;
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-runnable-track {
  background: #467fcf;
  content: '';
  height: 2px;
  pointer-events: none;
}

.custom-range::-webkit-slider-thumb {
  width: 14px;
  height: 14px;
  -webkit-appearance: none;
  appearance: none;
  background: #fff;
  border-radius: 50px;
  box-shadow: 1px 0 0 -6px rgba(0, 50, 126, 0.12), 6px 0 0 -6px rgba(0, 50, 126, 0.12), 7px 0 0 -6px rgba(0, 50, 126, 0.12), 8px 0 0 -6px rgba(0, 50, 126, 0.12), 9px 0 0 -6px rgba(0, 50, 126, 0.12), 10px 0 0 -6px rgba(0, 50, 126, 0.12), 11px 0 0 -6px rgba(0, 50, 126, 0.12), 12px 0 0 -6px rgba(0, 50, 126, 0.12), 13px 0 0 -6px rgba(0, 50, 126, 0.12), 14px 0 0 -6px rgba(0, 50, 126, 0.12), 15px 0 0 -6px rgba(0, 50, 126, 0.12), 16px 0 0 -6px rgba(0, 50, 126, 0.12), 17px 0 0 -6px rgba(0, 50, 126, 0.12), 18px 0 0 -6px rgba(0, 50, 126, 0.12), 19px 0 0 -6px rgba(0, 50, 126, 0.12), 20px 0 0 -6px rgba(0, 50, 126, 0.12), 21px 0 0 -6px rgba(0, 50, 126, 0.12), 22px 0 0 -6px rgba(0, 50, 126, 0.12), 23px 0 0 -6px rgba(0, 50, 126, 0.12), 24px 0 0 -6px rgba(0, 50, 126, 0.12), 25px 0 0 -6px rgba(0, 50, 126, 0.12), 26px 0 0 -6px rgba(0, 50, 126, 0.12), 27px 0 0 -6px rgba(0, 50, 126, 0.12), 28px 0 0 -6px rgba(0, 50, 126, 0.12), 29px 0 0 -6px rgba(0, 50, 126, 0.12), 30px 0 0 -6px rgba(0, 50, 126, 0.12), 31px 0 0 -6px rgba(0, 50, 126, 0.12), 32px 0 0 -6px rgba(0, 50, 126, 0.12), 33px 0 0 -6px rgba(0, 50, 126, 0.12), 34px 0 0 -6px rgba(0, 50, 126, 0.12), 35px 0 0 -6px rgba(0, 50, 126, 0.12), 36px 0 0 -6px rgba(0, 50, 126, 0.12), 37px 0 0 -6px rgba(0, 50, 126, 0.12), 38px 0 0 -6px rgba(0, 50, 126, 0.12), 39px 0 0 -6px rgba(0, 50, 126, 0.12), 40px 0 0 -6px rgba(0, 50, 126, 0.12), 41px 0 0 -6px rgba(0, 50, 126, 0.12), 42px 0 0 -6px rgba(0, 50, 126, 0.12), 43px 0 0 -6px rgba(0, 50, 126, 0.12), 44px 0 0 -6px rgba(0, 50, 126, 0.12), 45px 0 0 -6px rgba(0, 50, 126, 0.12), 46px 0 0 -6px rgba(0, 50, 126, 0.12), 47px 0 0 -6px rgba(0, 50, 126, 0.12), 48px 0 0 -6px rgba(0, 50, 126, 0.12), 49px 0 0 -6px rgba(0, 50, 126, 0.12), 50px 0 0 -6px rgba(0, 50, 126, 0.12), 51px 0 0 -6px rgba(0, 50, 126, 0.12), 52px 0 0 -6px rgba(0, 50, 126, 0.12), 53px 0 0 -6px rgba(0, 50, 126, 0.12), 54px 0 0 -6px rgba(0, 50, 126, 0.12), 55px 0 0 -6px rgba(0, 50, 126, 0.12), 56px 0 0 -6px rgba(0, 50, 126, 0.12), 57px 0 0 -6px rgba(0, 50, 126, 0.12), 58px 0 0 -6px rgba(0, 50, 126, 0.12), 59px 0 0 -6px rgba(0, 50, 126, 0.12), 60px 0 0 -6px rgba(0, 50, 126, 0.12), 61px 0 0 -6px rgba(0, 50, 126, 0.12), 62px 0 0 -6px rgba(0, 50, 126, 0.12), 63px 0 0 -6px rgba(0, 50, 126, 0.12), 64px 0 0 -6px rgba(0, 50, 126, 0.12), 65px 0 0 -6px rgba(0, 50, 126, 0.12), 66px 0 0 -6px rgba(0, 50, 126, 0.12), 67px 0 0 -6px rgba(0, 50, 126, 0.12), 68px 0 0 -6px rgba(0, 50, 126, 0.12), 69px 0 0 -6px rgba(0, 50, 126, 0.12), 70px 0 0 -6px rgba(0, 50, 126, 0.12), 71px 0 0 -6px rgba(0, 50, 126, 0.12), 72px 0 0 -6px rgba(0, 50, 126, 0.12), 73px 0 0 -6px rgba(0, 50, 126, 0.12), 74px 0 0 -6px rgba(0, 50, 126, 0.12), 75px 0 0 -6px rgba(0, 50, 126, 0.12), 76px 0 0 -6px rgba(0, 50, 126, 0.12), 77px 0 0 -6px rgba(0, 50, 126, 0.12), 78px 0 0 -6px rgba(0, 50, 126, 0.12), 79px 0 0 -6px rgba(0, 50, 126, 0.12), 80px 0 0 -6px rgba(0, 50, 126, 0.12), 81px 0 0 -6px rgba(0, 50, 126, 0.12), 82px 0 0 -6px rgba(0, 50, 126, 0.12), 83px 0 0 -6px rgba(0, 50, 126, 0.12), 84px 0 0 -6px rgba(0, 50, 126, 0.12), 85px 0 0 -6px rgba(0, 50, 126, 0.12), 86px 0 0 -6px rgba(0, 50, 126, 0.12), 87px 0 0 -6px rgba(0, 50, 126, 0.12), 88px 0 0 -6px rgba(0, 50, 126, 0.12), 89px 0 0 -6px rgba(0, 50, 126, 0.12), 90px 0 0 -6px rgba(0, 50, 126, 0.12), 91px 0 0 -6px rgba(0, 50, 126, 0.12), 92px 0 0 -6px rgba(0, 50, 126, 0.12), 93px 0 0 -6px rgba(0, 50, 126, 0.12), 94px 0 0 -6px rgba(0, 50, 126, 0.12), 95px 0 0 -6px rgba(0, 50, 126, 0.12), 96px 0 0 -6px rgba(0, 50, 126, 0.12), 97px 0 0 -6px rgba(0, 50, 126, 0.12), 98px 0 0 -6px rgba(0, 50, 126, 0.12), 99px 0 0 -6px rgba(0, 50, 126, 0.12), 100px 0 0 -6px rgba(0, 50, 126, 0.12), 101px 0 0 -6px rgba(0, 50, 126, 0.12), 102px 0 0 -6px rgba(0, 50, 126, 0.12), 103px 0 0 -6px rgba(0, 50, 126, 0.12), 104px 0 0 -6px rgba(0, 50, 126, 0.12), 105px 0 0 -6px rgba(0, 50, 126, 0.12), 106px 0 0 -6px rgba(0, 50, 126, 0.12), 107px 0 0 -6px rgba(0, 50, 126, 0.12), 108px 0 0 -6px rgba(0, 50, 126, 0.12), 109px 0 0 -6px rgba(0, 50, 126, 0.12), 110px 0 0 -6px rgba(0, 50, 126, 0.12), 111px 0 0 -6px rgba(0, 50, 126, 0.12), 112px 0 0 -6px rgba(0, 50, 126, 0.12), 113px 0 0 -6px rgba(0, 50, 126, 0.12), 114px 0 0 -6px rgba(0, 50, 126, 0.12), 115px 0 0 -6px rgba(0, 50, 126, 0.12), 116px 0 0 -6px rgba(0, 50, 126, 0.12), 117px 0 0 -6px rgba(0, 50, 126, 0.12), 118px 0 0 -6px rgba(0, 50, 126, 0.12), 119px 0 0 -6px rgba(0, 50, 126, 0.12), 120px 0 0 -6px rgba(0, 50, 126, 0.12), 121px 0 0 -6px rgba(0, 50, 126, 0.12), 122px 0 0 -6px rgba(0, 50, 126, 0.12), 123px 0 0 -6px rgba(0, 50, 126, 0.12), 124px 0 0 -6px rgba(0, 50, 126, 0.12), 125px 0 0 -6px rgba(0, 50, 126, 0.12), 126px 0 0 -6px rgba(0, 50, 126, 0.12), 127px 0 0 -6px rgba(0, 50, 126, 0.12), 128px 0 0 -6px rgba(0, 50, 126, 0.12), 129px 0 0 -6px rgba(0, 50, 126, 0.12), 130px 0 0 -6px rgba(0, 50, 126, 0.12), 131px 0 0 -6px rgba(0, 50, 126, 0.12), 132px 0 0 -6px rgba(0, 50, 126, 0.12), 133px 0 0 -6px rgba(0, 50, 126, 0.12), 134px 0 0 -6px rgba(0, 50, 126, 0.12), 135px 0 0 -6px rgba(0, 50, 126, 0.12), 136px 0 0 -6px rgba(0, 50, 126, 0.12), 137px 0 0 -6px rgba(0, 50, 126, 0.12), 138px 0 0 -6px rgba(0, 50, 126, 0.12), 139px 0 0 -6px rgba(0, 50, 126, 0.12), 140px 0 0 -6px rgba(0, 50, 126, 0.12), 141px 0 0 -6px rgba(0, 50, 126, 0.12), 142px 0 0 -6px rgba(0, 50, 126, 0.12), 143px 0 0 -6px rgba(0, 50, 126, 0.12), 144px 0 0 -6px rgba(0, 50, 126, 0.12), 145px 0 0 -6px rgba(0, 50, 126, 0.12), 146px 0 0 -6px rgba(0, 50, 126, 0.12), 147px 0 0 -6px rgba(0, 50, 126, 0.12), 148px 0 0 -6px rgba(0, 50, 126, 0.12), 149px 0 0 -6px rgba(0, 50, 126, 0.12), 150px 0 0 -6px rgba(0, 50, 126, 0.12), 151px 0 0 -6px rgba(0, 50, 126, 0.12), 152px 0 0 -6px rgba(0, 50, 126, 0.12), 153px 0 0 -6px rgba(0, 50, 126, 0.12), 154px 0 0 -6px rgba(0, 50, 126, 0.12), 155px 0 0 -6px rgba(0, 50, 126, 0.12), 156px 0 0 -6px rgba(0, 50, 126, 0.12), 157px 0 0 -6px rgba(0, 50, 126, 0.12), 158px 0 0 -6px rgba(0, 50, 126, 0.12), 159px 0 0 -6px rgba(0, 50, 126, 0.12), 160px 0 0 -6px rgba(0, 50, 126, 0.12), 161px 0 0 -6px rgba(0, 50, 126, 0.12), 162px 0 0 -6px rgba(0, 50, 126, 0.12), 163px 0 0 -6px rgba(0, 50, 126, 0.12), 164px 0 0 -6px rgba(0, 50, 126, 0.12), 165px 0 0 -6px rgba(0, 50, 126, 0.12), 166px 0 0 -6px rgba(0, 50, 126, 0.12), 167px 0 0 -6px rgba(0, 50, 126, 0.12), 168px 0 0 -6px rgba(0, 50, 126, 0.12), 169px 0 0 -6px rgba(0, 50, 126, 0.12), 170px 0 0 -6px rgba(0, 50, 126, 0.12), 171px 0 0 -6px rgba(0, 50, 126, 0.12), 172px 0 0 -6px rgba(0, 50, 126, 0.12), 173px 0 0 -6px rgba(0, 50, 126, 0.12), 174px 0 0 -6px rgba(0, 50, 126, 0.12), 175px 0 0 -6px rgba(0, 50, 126, 0.12), 176px 0 0 -6px rgba(0, 50, 126, 0.12), 177px 0 0 -6px rgba(0, 50, 126, 0.12), 178px 0 0 -6px rgba(0, 50, 126, 0.12), 179px 0 0 -6px rgba(0, 50, 126, 0.12), 180px 0 0 -6px rgba(0, 50, 126, 0.12), 181px 0 0 -6px rgba(0, 50, 126, 0.12), 182px 0 0 -6px rgba(0, 50, 126, 0.12), 183px 0 0 -6px rgba(0, 50, 126, 0.12), 184px 0 0 -6px rgba(0, 50, 126, 0.12), 185px 0 0 -6px rgba(0, 50, 126, 0.12), 186px 0 0 -6px rgba(0, 50, 126, 0.12), 187px 0 0 -6px rgba(0, 50, 126, 0.12), 188px 0 0 -6px rgba(0, 50, 126, 0.12), 189px 0 0 -6px rgba(0, 50, 126, 0.12), 190px 0 0 -6px rgba(0, 50, 126, 0.12), 191px 0 0 -6px rgba(0, 50, 126, 0.12), 192px 0 0 -6px rgba(0, 50, 126, 0.12), 193px 0 0 -6px rgba(0, 50, 126, 0.12), 194px 0 0 -6px rgba(0, 50, 126, 0.12), 195px 0 0 -6px rgba(0, 50, 126, 0.12), 196px 0 0 -6px rgba(0, 50, 126, 0.12), 197px 0 0 -6px rgba(0, 50, 126, 0.12), 198px 0 0 -6px rgba(0, 50, 126, 0.12), 199px 0 0 -6px rgba(0, 50, 126, 0.12), 200px 0 0 -6px rgba(0, 50, 126, 0.12), 201px 0 0 -6px rgba(0, 50, 126, 0.12), 202px 0 0 -6px rgba(0, 50, 126, 0.12), 203px 0 0 -6px rgba(0, 50, 126, 0.12), 204px 0 0 -6px rgba(0, 50, 126, 0.12), 205px 0 0 -6px rgba(0, 50, 126, 0.12), 206px 0 0 -6px rgba(0, 50, 126, 0.12), 207px 0 0 -6px rgba(0, 50, 126, 0.12), 208px 0 0 -6px rgba(0, 50, 126, 0.12), 209px 0 0 -6px rgba(0, 50, 126, 0.12), 210px 0 0 -6px rgba(0, 50, 126, 0.12), 211px 0 0 -6px rgba(0, 50, 126, 0.12), 212px 0 0 -6px rgba(0, 50, 126, 0.12), 213px 0 0 -6px rgba(0, 50, 126, 0.12), 214px 0 0 -6px rgba(0, 50, 126, 0.12), 215px 0 0 -6px rgba(0, 50, 126, 0.12), 216px 0 0 -6px rgba(0, 50, 126, 0.12), 217px 0 0 -6px rgba(0, 50, 126, 0.12), 218px 0 0 -6px rgba(0, 50, 126, 0.12), 219px 0 0 -6px rgba(0, 50, 126, 0.12), 220px 0 0 -6px rgba(0, 50, 126, 0.12), 221px 0 0 -6px rgba(0, 50, 126, 0.12), 222px 0 0 -6px rgba(0, 50, 126, 0.12), 223px 0 0 -6px rgba(0, 50, 126, 0.12), 224px 0 0 -6px rgba(0, 50, 126, 0.12), 225px 0 0 -6px rgba(0, 50, 126, 0.12), 226px 0 0 -6px rgba(0, 50, 126, 0.12), 227px 0 0 -6px rgba(0, 50, 126, 0.12), 228px 0 0 -6px rgba(0, 50, 126, 0.12), 229px 0 0 -6px rgba(0, 50, 126, 0.12), 230px 0 0 -6px rgba(0, 50, 126, 0.12), 231px 0 0 -6px rgba(0, 50, 126, 0.12), 232px 0 0 -6px rgba(0, 50, 126, 0.12), 233px 0 0 -6px rgba(0, 50, 126, 0.12), 234px 0 0 -6px rgba(0, 50, 126, 0.12), 235px 0 0 -6px rgba(0, 50, 126, 0.12), 236px 0 0 -6px rgba(0, 50, 126, 0.12), 237px 0 0 -6px rgba(0, 50, 126, 0.12), 238px 0 0 -6px rgba(0, 50, 126, 0.12), 239px 0 0 -6px rgba(0, 50, 126, 0.12), 240px 0 0 -6px rgba(0, 50, 126, 0.12);
  margin-top: -6px;
  border: 1px solid rgba(0, 30, 75, 0.12);
  transition: .3s border-color, .3s background-color;
}

.custom-range::-moz-range-track {
  width: 240px;
  height: 2px;
  background: rgba(0, 50, 126, 0.12);
}

.custom-range::-moz-range-thumb {
  width: 14px;
  height: 14px;
  background: #fff;
  border-radius: 50px;
  border: 1px solid rgba(0, 30, 75, 0.12);
  position: relative;
  transition: .3s border-color, .3s background-color;
}

.custom-range::-moz-range-progress {
  height: 2px;
  background: #467fcf;
  border: 0;
  margin-top: 0;
}

.custom-range::-ms-track {
  background: transparent;
  border: 0;
  border-color: transparent;
  border-radius: 0;
  border-width: 0;
  color: transparent;
  height: 2px;
  margin-top: 10px;
  width: 240px;
}

.custom-range::-ms-thumb {
  width: 240px;
  height: 2px;
  background: #fff;
  border-radius: 50px;
  border: 1px solid rgba(0, 30, 75, 0.12);
  transition: .3s border-color, .3s background-color;
}

.custom-range::-ms-fill-lower {
  background: #467fcf;
  border-radius: 0;
}

.custom-range::-ms-fill-upper {
  background: rgba(0, 50, 126, 0.12);
  border-radius: 0;
}

.custom-range::-ms-tooltip {
  display: none;
}

.selectgroup {
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.selectgroup-item {
  -ms-flex-positive: 1;
  flex-grow: 1;
  position: relative;
}

.selectgroup-item + .selectgroup-item {
  margin-left: -1px;
}

.selectgroup-item:not(:first-child) .selectgroup-button {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.selectgroup-item:not(:last-child) .selectgroup-button {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.selectgroup-input {
  opacity: 0;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
}

.selectgroup-button {
  display: block;
  border: 1px solid rgba(0, 40, 100, 0.12);
  text-align: center;
  padding: 0.375rem 1rem;
  position: relative;
  cursor: pointer;
  border-radius: 3px;
  color: #9aa0ac;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 0.9375rem;
  line-height: 1.5rem;
  min-width: 2.375rem;
}

.selectgroup-button-icon {
  padding-left: .5rem;
  padding-right: .5rem;
  font-size: 1rem;
}

.selectgroup-input:checked + .selectgroup-button {
  border-color: #467fcf;
  z-index: 1;
  color: #467fcf;
  background: #edf2fa;
}

.selectgroup-input:focus + .selectgroup-button {
  border-color: #467fcf;
  z-index: 2;
  color: #467fcf;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.selectgroup-pills {
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: start;
  align-items: flex-start;
}

.selectgroup-pills .selectgroup-item {
  margin-right: .5rem;
  -ms-flex-positive: 0;
  flex-grow: 0;
}

.selectgroup-pills .selectgroup-button {
  border-radius: 50px !important;
}

.custom-switch {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: default;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  margin: 0;
}

.custom-switch-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-switches-stacked {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.custom-switches-stacked .custom-switch {
  margin-bottom: .5rem;
}

.custom-switch-indicator {
  display: inline-block;
  height: 1.25rem;
  width: 2.25rem;
  background: #e9ecef;
  border-radius: 50px;
  position: relative;
  vertical-align: bottom;
  border: 1px solid rgba(0, 40, 100, 0.12);
  transition: .3s border-color, .3s background-color;
}

.custom-switch-indicator:before {
  content: '';
  position: absolute;
  height: calc(1.25rem - 4px);
  width: calc(1.25rem - 4px);
  top: 1px;
  left: 1px;
  background: #fff;
  border-radius: 50%;
  transition: .3s left;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
}

.custom-switch-input:checked ~ .custom-switch-indicator {
  background: #467fcf;
}

.custom-switch-input:checked ~ .custom-switch-indicator:before {
  left: calc(1rem + 1px);
}

.custom-switch-input:focus ~ .custom-switch-indicator {
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
  border-color: #467fcf;
}

.custom-switch-description {
  margin-left: .5rem;
  color: #6e7687;
  transition: .3s color;
}

.custom-switch-input:checked ~ .custom-switch-description {
  color: #495057;
}

.imagecheck {
  margin: 0;
  position: relative;
  cursor: pointer;
}

.imagecheck-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.imagecheck-figure {
  border: 1px solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  margin: 0;
  position: relative;
}

.imagecheck-input:focus ~ .imagecheck-figure {
  border-color: #467fcf;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.imagecheck-input:checked ~ .imagecheck-figure {
  border-color: rgba(0, 40, 100, 0.24);
}

.imagecheck-figure:before {
  content: '';
  position: absolute;
  top: .25rem;
  left: .25rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background: #467fcf url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
  color: #fff;
  z-index: 1;
  border-radius: 3px;
  opacity: 0;
  transition: .3s opacity;
}

.imagecheck-input:checked ~ .imagecheck-figure:before {
  opacity: 1;
}

.imagecheck-image {
  max-width: 100%;
  opacity: .64;
  transition: .3s opacity;
}

.imagecheck-image:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}

.imagecheck-image:last-child {
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}

.imagecheck:hover .imagecheck-image,
.imagecheck-input:focus ~ .imagecheck-figure .imagecheck-image,
.imagecheck-input:checked ~ .imagecheck-figure .imagecheck-image {
  opacity: 1;
}

.imagecheck-caption {
  text-align: center;
  padding: .25rem .25rem;
  color: #9aa0ac;
  font-size: 0.875rem;
  transition: .3s color;
}

.imagecheck:hover .imagecheck-caption,
.imagecheck-input:focus ~ .imagecheck-figure .imagecheck-caption,
.imagecheck-input:checked ~ .imagecheck-figure .imagecheck-caption {
  color: #495057;
}

.colorinput {
  margin: 0;
  position: relative;
  cursor: pointer;
}

.colorinput-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.colorinput-color {
  display: inline-block;
  width: 1.75rem;
  height: 1.75rem;
  border-radius: 3px;
  border: 1px solid rgba(0, 40, 100, 0.12);
  color: #fff;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.colorinput-color:before {
  content: '';
  opacity: 0;
  position: absolute;
  top: .25rem;
  left: .25rem;
  height: 1.25rem;
  width: 1.25rem;
  transition: .3s opacity;
  background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
}

.colorinput-input:checked ~ .colorinput-color:before {
  opacity: 1;
}

.colorinput-input:focus ~ .colorinput-color {
  border-color: #467fcf;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.timeline {
  position: relative;
  margin: 0 0 2rem;
  padding: 0;
  list-style: none;
}

.timeline:before {
  background-color: #e9ecef;
  position: absolute;
  display: block;
  content: '';
  width: 1px;
  height: 100%;
  top: 0;
  bottom: 0;
  left: 4px;
}

.timeline-item {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  padding-left: 2rem;
  margin: .5rem 0;
}

.timeline-item:first-child:before, .timeline-item:last-child:before {
  content: '';
  position: absolute;
  background: #fff;
  width: 1px;
  left: .25rem;
}

.timeline-item:first-child {
  margin-top: 0;
}

.timeline-item:first-child:before {
  top: 0;
  height: .5rem;
}

.timeline-item:last-child {
  margin-bottom: 0;
}

.timeline-item:last-child:before {
  top: .5rem;
  bottom: 0;
}

.timeline-badge {
  position: absolute;
  display: block;
  width: 0.4375rem;
  height: 0.4375rem;
  left: 1px;
  top: .5rem;
  border-radius: 100%;
  border: 1px solid #fff;
  background: #adb5bd;
}

.timeline-time {
  white-space: nowrap;
  margin-left: auto;
  color: #9aa0ac;
  font-size: 87.5%;
}

.browser {
  width: 1.25rem;
  height: 1.25rem;
  display: inline-block;
  background: no-repeat center/100% 100%;
  vertical-align: bottom;
  font-style: normal;
}

.browser-android-browser {
  background-image: url("../images/browsers/android-browser.svg");
}

.browser-aol-explorer {
  background-image: url("../images/browsers/aol-explorer.svg");
}

.browser-blackberry {
  background-image: url("../images/browsers/blackberry.svg");
}

.browser-camino {
  background-image: url("../images/browsers/camino.svg");
}

.browser-chrome {
  background-image: url("../images/browsers/chrome.svg");
}

.browser-chromium {
  background-image: url("../images/browsers/chromium.svg");
}

.browser-dolphin {
  background-image: url("../images/browsers/dolphin.svg");
}

.browser-edge {
  background-image: url("../images/browsers/edge.svg");
}

.browser-firefox {
  background-image: url("../images/browsers/firefox.svg");
}

.browser-ie {
  background-image: url("../images/browsers/ie.svg");
}

.browser-maxthon {
  background-image: url("../images/browsers/maxthon.svg");
}

.browser-mozilla {
  background-image: url("../images/browsers/mozilla.svg");
}

.browser-netscape {
  background-image: url("../images/browsers/netscape.svg");
}

.browser-opera {
  background-image: url("../images/browsers/opera.svg");
}

.browser-safari {
  background-image: url("../images/browsers/safari.svg");
}

.browser-sleipnir {
  background-image: url("../images/browsers/sleipnir.svg");
}

.browser-uc-browser {
  background-image: url("../images/browsers/uc-browser.svg");
}

.browser-vivaldi {
  background-image: url("../images/browsers/vivaldi.svg");
}

.flag {
  width: 1.6rem;
  height: 1.2rem;
  display: inline-block;
  background: no-repeat center/100% 100%;
  vertical-align: bottom;
  font-style: normal;
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 2px;
}

.flag-ad {
  background-image: url("../images/flags/ad.svg");
}

.flag-ae {
  background-image: url("../images/flags/ae.svg");
}

.flag-af {
  background-image: url("../images/flags/af.svg");
}

.flag-ag {
  background-image: url("../images/flags/ag.svg");
}

.flag-ai {
  background-image: url("../images/flags/ai.svg");
}

.flag-al {
  background-image: url("../images/flags/al.svg");
}

.flag-am {
  background-image: url("../images/flags/am.svg");
}

.flag-ao {
  background-image: url("../images/flags/ao.svg");
}

.flag-aq {
  background-image: url("../images/flags/aq.svg");
}

.flag-ar {
  background-image: url("../images/flags/ar.svg");
}

.flag-as {
  background-image: url("../images/flags/as.svg");
}

.flag-at {
  background-image: url("../images/flags/at.svg");
}

.flag-au {
  background-image: url("../images/flags/au.svg");
}

.flag-aw {
  background-image: url("../images/flags/aw.svg");
}

.flag-ax {
  background-image: url("../images/flags/ax.svg");
}

.flag-az {
  background-image: url("../images/flags/az.svg");
}

.flag-ba {
  background-image: url("../images/flags/ba.svg");
}

.flag-bb {
  background-image: url("../images/flags/bb.svg");
}

.flag-bd {
  background-image: url("../images/flags/bd.svg");
}

.flag-be {
  background-image: url("../images/flags/be.svg");
}

.flag-bf {
  background-image: url("../images/flags/bf.svg");
}

.flag-bg {
  background-image: url("../images/flags/bg.svg");
}

.flag-bh {
  background-image: url("../images/flags/bh.svg");
}

.flag-bi {
  background-image: url("../images/flags/bi.svg");
}

.flag-bj {
  background-image: url("../images/flags/bj.svg");
}

.flag-bl {
  background-image: url("../images/flags/bl.svg");
}

.flag-bm {
  background-image: url("../images/flags/bm.svg");
}

.flag-bn {
  background-image: url("../images/flags/bn.svg");
}

.flag-bo {
  background-image: url("../images/flags/bo.svg");
}

.flag-bq {
  background-image: url("../images/flags/bq.svg");
}

.flag-br {
  background-image: url("../images/flags/br.svg");
}

.flag-bs {
  background-image: url("../images/flags/bs.svg");
}

.flag-bt {
  background-image: url("../images/flags/bt.svg");
}

.flag-bv {
  background-image: url("../images/flags/bv.svg");
}

.flag-bw {
  background-image: url("../images/flags/bw.svg");
}

.flag-by {
  background-image: url("../images/flags/by.svg");
}

.flag-bz {
  background-image: url("../images/flags/bz.svg");
}

.flag-ca {
  background-image: url("../images/flags/ca.svg");
}

.flag-cc {
  background-image: url("../images/flags/cc.svg");
}

.flag-cd {
  background-image: url("../images/flags/cd.svg");
}

.flag-cf {
  background-image: url("../images/flags/cf.svg");
}

.flag-cg {
  background-image: url("../images/flags/cg.svg");
}

.flag-ch {
  background-image: url("../images/flags/ch.svg");
}

.flag-ci {
  background-image: url("../images/flags/ci.svg");
}

.flag-ck {
  background-image: url("../images/flags/ck.svg");
}

.flag-cl {
  background-image: url("../images/flags/cl.svg");
}

.flag-cm {
  background-image: url("../images/flags/cm.svg");
}

.flag-cn {
  background-image: url("../images/flags/cn.svg");
}

.flag-co {
  background-image: url("../images/flags/co.svg");
}

.flag-cr {
  background-image: url("../images/flags/cr.svg");
}

.flag-cu {
  background-image: url("../images/flags/cu.svg");
}

.flag-cv {
  background-image: url("../images/flags/cv.svg");
}

.flag-cw {
  background-image: url("../images/flags/cw.svg");
}

.flag-cx {
  background-image: url("../images/flags/cx.svg");
}

.flag-cy {
  background-image: url("../images/flags/cy.svg");
}

.flag-cz {
  background-image: url("../images/flags/cz.svg");
}

.flag-de {
  background-image: url("../images/flags/de.svg");
}

.flag-dj {
  background-image: url("../images/flags/dj.svg");
}

.flag-dk {
  background-image: url("../images/flags/dk.svg");
}

.flag-dm {
  background-image: url("../images/flags/dm.svg");
}

.flag-do {
  background-image: url("../images/flags/do.svg");
}

.flag-dz {
  background-image: url("../images/flags/dz.svg");
}

.flag-ec {
  background-image: url("../images/flags/ec.svg");
}

.flag-ee {
  background-image: url("../images/flags/ee.svg");
}

.flag-eg {
  background-image: url("../images/flags/eg.svg");
}

.flag-eh {
  background-image: url("../images/flags/eh.svg");
}

.flag-er {
  background-image: url("../images/flags/er.svg");
}

.flag-es {
  background-image: url("../images/flags/es.svg");
}

.flag-et {
  background-image: url("../images/flags/et.svg");
}

.flag-eu {
  background-image: url("../images/flags/eu.svg");
}

.flag-fi {
  background-image: url("../images/flags/fi.svg");
}

.flag-fj {
  background-image: url("../images/flags/fj.svg");
}

.flag-fk {
  background-image: url("../images/flags/fk.svg");
}

.flag-fm {
  background-image: url("../images/flags/fm.svg");
}

.flag-fo {
  background-image: url("../images/flags/fo.svg");
}

.flag-fr {
  background-image: url("../images/flags/fr.svg");
}

.flag-ga {
  background-image: url("../images/flags/ga.svg");
}

.flag-gb-eng {
  background-image: url("../images/flags/gb-eng.svg");
}

.flag-gb-nir {
  background-image: url("../images/flags/gb-nir.svg");
}

.flag-gb-sct {
  background-image: url("../images/flags/gb-sct.svg");
}

.flag-gb-wls {
  background-image: url("../images/flags/gb-wls.svg");
}

.flag-gb {
  background-image: url("../images/flags/gb.svg");
}

.flag-gd {
  background-image: url("../images/flags/gd.svg");
}

.flag-ge {
  background-image: url("../images/flags/ge.svg");
}

.flag-gf {
  background-image: url("../images/flags/gf.svg");
}

.flag-gg {
  background-image: url("../images/flags/gg.svg");
}

.flag-gh {
  background-image: url("../images/flags/gh.svg");
}

.flag-gi {
  background-image: url("../images/flags/gi.svg");
}

.flag-gl {
  background-image: url("../images/flags/gl.svg");
}

.flag-gm {
  background-image: url("../images/flags/gm.svg");
}

.flag-gn {
  background-image: url("../images/flags/gn.svg");
}

.flag-gp {
  background-image: url("../images/flags/gp.svg");
}

.flag-gq {
  background-image: url("../images/flags/gq.svg");
}

.flag-gr {
  background-image: url("../images/flags/gr.svg");
}

.flag-gs {
  background-image: url("../images/flags/gs.svg");
}

.flag-gt {
  background-image: url("../images/flags/gt.svg");
}

.flag-gu {
  background-image: url("../images/flags/gu.svg");
}

.flag-gw {
  background-image: url("../images/flags/gw.svg");
}

.flag-gy {
  background-image: url("../images/flags/gy.svg");
}

.flag-hk {
  background-image: url("../images/flags/hk.svg");
}

.flag-hm {
  background-image: url("../images/flags/hm.svg");
}

.flag-hn {
  background-image: url("../images/flags/hn.svg");
}

.flag-hr {
  background-image: url("../images/flags/hr.svg");
}

.flag-ht {
  background-image: url("../images/flags/ht.svg");
}

.flag-hu {
  background-image: url("../images/flags/hu.svg");
}

.flag-id {
  background-image: url("../images/flags/id.svg");
}

.flag-ie {
  background-image: url("../images/flags/ie.svg");
}

.flag-il {
  background-image: url("../images/flags/il.svg");
}

.flag-im {
  background-image: url("../images/flags/im.svg");
}

.flag-in {
  background-image: url("../images/flags/in.svg");
}

.flag-io {
  background-image: url("../images/flags/io.svg");
}

.flag-iq {
  background-image: url("../images/flags/iq.svg");
}

.flag-ir {
  background-image: url("../images/flags/ir.svg");
}

.flag-is {
  background-image: url("../images/flags/is.svg");
}

.flag-it {
  background-image: url("../images/flags/it.svg");
}

.flag-je {
  background-image: url("../images/flags/je.svg");
}

.flag-jm {
  background-image: url("../images/flags/jm.svg");
}

.flag-jo {
  background-image: url("../images/flags/jo.svg");
}

.flag-jp {
  background-image: url("../images/flags/jp.svg");
}

.flag-ke {
  background-image: url("../images/flags/ke.svg");
}

.flag-kg {
  background-image: url("../images/flags/kg.svg");
}

.flag-kh {
  background-image: url("../images/flags/kh.svg");
}

.flag-ki {
  background-image: url("../images/flags/ki.svg");
}

.flag-km {
  background-image: url("../images/flags/km.svg");
}

.flag-kn {
  background-image: url("../images/flags/kn.svg");
}

.flag-kp {
  background-image: url("../images/flags/kp.svg");
}

.flag-kr {
  background-image: url("../images/flags/kr.svg");
}

.flag-kw {
  background-image: url("../images/flags/kw.svg");
}

.flag-ky {
  background-image: url("../images/flags/ky.svg");
}

.flag-kz {
  background-image: url("../images/flags/kz.svg");
}

.flag-la {
  background-image: url("../images/flags/la.svg");
}

.flag-lb {
  background-image: url("../images/flags/lb.svg");
}

.flag-lc {
  background-image: url("../images/flags/lc.svg");
}

.flag-li {
  background-image: url("../images/flags/li.svg");
}

.flag-lk {
  background-image: url("../images/flags/lk.svg");
}

.flag-lr {
  background-image: url("../images/flags/lr.svg");
}

.flag-ls {
  background-image: url("../images/flags/ls.svg");
}

.flag-lt {
  background-image: url("../images/flags/lt.svg");
}

.flag-lu {
  background-image: url("../images/flags/lu.svg");
}

.flag-lv {
  background-image: url("../images/flags/lv.svg");
}

.flag-ly {
  background-image: url("../images/flags/ly.svg");
}

.flag-ma {
  background-image: url("../images/flags/ma.svg");
}

.flag-mc {
  background-image: url("../images/flags/mc.svg");
}

.flag-md {
  background-image: url("../images/flags/md.svg");
}

.flag-me {
  background-image: url("../images/flags/me.svg");
}

.flag-mf {
  background-image: url("../images/flags/mf.svg");
}

.flag-mg {
  background-image: url("../images/flags/mg.svg");
}

.flag-mh {
  background-image: url("../images/flags/mh.svg");
}

.flag-mk {
  background-image: url("../images/flags/mk.svg");
}

.flag-ml {
  background-image: url("../images/flags/ml.svg");
}

.flag-mm {
  background-image: url("../images/flags/mm.svg");
}

.flag-mn {
  background-image: url("../images/flags/mn.svg");
}

.flag-mo {
  background-image: url("../images/flags/mo.svg");
}

.flag-mp {
  background-image: url("../images/flags/mp.svg");
}

.flag-mq {
  background-image: url("../images/flags/mq.svg");
}

.flag-mr {
  background-image: url("../images/flags/mr.svg");
}

.flag-ms {
  background-image: url("../images/flags/ms.svg");
}

.flag-mt {
  background-image: url("../images/flags/mt.svg");
}

.flag-mu {
  background-image: url("../images/flags/mu.svg");
}

.flag-mv {
  background-image: url("../images/flags/mv.svg");
}

.flag-mw {
  background-image: url("../images/flags/mw.svg");
}

.flag-mx {
  background-image: url("../images/flags/mx.svg");
}

.flag-my {
  background-image: url("../images/flags/my.svg");
}

.flag-mz {
  background-image: url("../images/flags/mz.svg");
}

.flag-na {
  background-image: url("../images/flags/na.svg");
}

.flag-nc {
  background-image: url("../images/flags/nc.svg");
}

.flag-ne {
  background-image: url("../images/flags/ne.svg");
}

.flag-nf {
  background-image: url("../images/flags/nf.svg");
}

.flag-ng {
  background-image: url("../images/flags/ng.svg");
}

.flag-ni {
  background-image: url("../images/flags/ni.svg");
}

.flag-nl {
  background-image: url("../images/flags/nl.svg");
}

.flag-no {
  background-image: url("../images/flags/no.svg");
}

.flag-np {
  background-image: url("../images/flags/np.svg");
}

.flag-nr {
  background-image: url("../images/flags/nr.svg");
}

.flag-nu {
  background-image: url("../images/flags/nu.svg");
}

.flag-nz {
  background-image: url("../images/flags/nz.svg");
}

.flag-om {
  background-image: url("../images/flags/om.svg");
}

.flag-pa {
  background-image: url("../images/flags/pa.svg");
}

.flag-pe {
  background-image: url("../images/flags/pe.svg");
}

.flag-pf {
  background-image: url("../images/flags/pf.svg");
}

.flag-pg {
  background-image: url("../images/flags/pg.svg");
}

.flag-ph {
  background-image: url("../images/flags/ph.svg");
}

.flag-pk {
  background-image: url("../images/flags/pk.svg");
}

.flag-pl {
  background-image: url("../images/flags/pl.svg");
}

.flag-pm {
  background-image: url("../images/flags/pm.svg");
}

.flag-pn {
  background-image: url("../images/flags/pn.svg");
}

.flag-pr {
  background-image: url("../images/flags/pr.svg");
}

.flag-ps {
  background-image: url("../images/flags/ps.svg");
}

.flag-pt {
  background-image: url("../images/flags/pt.svg");
}

.flag-pw {
  background-image: url("../images/flags/pw.svg");
}

.flag-py {
  background-image: url("../images/flags/py.svg");
}

.flag-qa {
  background-image: url("../images/flags/qa.svg");
}

.flag-re {
  background-image: url("../images/flags/re.svg");
}

.flag-ro {
  background-image: url("../images/flags/ro.svg");
}

.flag-rs {
  background-image: url("../images/flags/rs.svg");
}

.flag-ru {
  background-image: url("../images/flags/ru.svg");
}

.flag-rw {
  background-image: url("../images/flags/rw.svg");
}

.flag-sa {
  background-image: url("../images/flags/sa.svg");
}

.flag-sb {
  background-image: url("../images/flags/sb.svg");
}

.flag-sc {
  background-image: url("../images/flags/sc.svg");
}

.flag-sd {
  background-image: url("../images/flags/sd.svg");
}

.flag-se {
  background-image: url("../images/flags/se.svg");
}

.flag-sg {
  background-image: url("../images/flags/sg.svg");
}

.flag-sh {
  background-image: url("../images/flags/sh.svg");
}

.flag-si {
  background-image: url("../images/flags/si.svg");
}

.flag-sj {
  background-image: url("../images/flags/sj.svg");
}

.flag-sk {
  background-image: url("../images/flags/sk.svg");
}

.flag-sl {
  background-image: url("../images/flags/sl.svg");
}

.flag-sm {
  background-image: url("../images/flags/sm.svg");
}

.flag-sn {
  background-image: url("../images/flags/sn.svg");
}

.flag-so {
  background-image: url("../images/flags/so.svg");
}

.flag-sr {
  background-image: url("../images/flags/sr.svg");
}

.flag-ss {
  background-image: url("../images/flags/ss.svg");
}

.flag-st {
  background-image: url("../images/flags/st.svg");
}

.flag-sv {
  background-image: url("../images/flags/sv.svg");
}

.flag-sx {
  background-image: url("../images/flags/sx.svg");
}

.flag-sy {
  background-image: url("../images/flags/sy.svg");
}

.flag-sz {
  background-image: url("../images/flags/sz.svg");
}

.flag-tc {
  background-image: url("../images/flags/tc.svg");
}

.flag-td {
  background-image: url("../images/flags/td.svg");
}

.flag-tf {
  background-image: url("../images/flags/tf.svg");
}

.flag-tg {
  background-image: url("../images/flags/tg.svg");
}

.flag-th {
  background-image: url("../images/flags/th.svg");
}

.flag-tj {
  background-image: url("../images/flags/tj.svg");
}

.flag-tk {
  background-image: url("../images/flags/tk.svg");
}

.flag-tl {
  background-image: url("../images/flags/tl.svg");
}

.flag-tm {
  background-image: url("../images/flags/tm.svg");
}

.flag-tn {
  background-image: url("../images/flags/tn.svg");
}

.flag-to {
  background-image: url("../images/flags/to.svg");
}

.flag-tr {
  background-image: url("../images/flags/tr.svg");
}

.flag-tt {
  background-image: url("../images/flags/tt.svg");
}

.flag-tv {
  background-image: url("../images/flags/tv.svg");
}

.flag-tw {
  background-image: url("../images/flags/tw.svg");
}

.flag-tz {
  background-image: url("../images/flags/tz.svg");
}

.flag-ua {
  background-image: url("../images/flags/ua.svg");
}

.flag-ug {
  background-image: url("../images/flags/ug.svg");
}

.flag-um {
  background-image: url("../images/flags/um.svg");
}

.flag-un {
  background-image: url("../images/flags/un.svg");
}

.flag-us {
  background-image: url("../images/flags/us.svg");
}

.flag-uy {
  background-image: url("../images/flags/uy.svg");
}

.flag-uz {
  background-image: url("../images/flags/uz.svg");
}

.flag-va {
  background-image: url("../images/flags/va.svg");
}

.flag-vc {
  background-image: url("../images/flags/vc.svg");
}

.flag-ve {
  background-image: url("../images/flags/ve.svg");
}

.flag-vg {
  background-image: url("../images/flags/vg.svg");
}

.flag-vi {
  background-image: url("../images/flags/vi.svg");
}

.flag-vn {
  background-image: url("../images/flags/vn.svg");
}

.flag-vu {
  background-image: url("../images/flags/vu.svg");
}

.flag-wf {
  background-image: url("../images/flags/wf.svg");
}

.flag-ws {
  background-image: url("../images/flags/ws.svg");
}

.flag-ye {
  background-image: url("../images/flags/ye.svg");
}

.flag-yt {
  background-image: url("../images/flags/yt.svg");
}

.flag-za {
  background-image: url("../images/flags/za.svg");
}

.flag-zm {
  background-image: url("../images/flags/zm.svg");
}

.flag-zw {
  background-image: url("../images/flags/zw.svg");
}

.payment {
  width: 2.5rem;
  height: 1.5rem;
  display: inline-block;
  background: no-repeat center/100% 100%;
  vertical-align: bottom;
  font-style: normal;
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 2px;
}

.payment-2checkout-dark {
  background-image: url("../images/payments/2checkout-dark.svg");
}

.payment-2checkout {
  background-image: url("../images/payments/2checkout.svg");
}

.payment-alipay-dark {
  background-image: url("../images/payments/alipay-dark.svg");
}

.payment-alipay {
  background-image: url("../images/payments/alipay.svg");
}

.payment-amazon-dark {
  background-image: url("../images/payments/amazon-dark.svg");
}

.payment-amazon {
  background-image: url("../images/payments/amazon.svg");
}

.payment-americanexpress-dark {
  background-image: url("../images/payments/americanexpress-dark.svg");
}

.payment-americanexpress {
  background-image: url("../images/payments/americanexpress.svg");
}

.payment-applepay-dark {
  background-image: url("../images/payments/applepay-dark.svg");
}

.payment-applepay {
  background-image: url("../images/payments/applepay.svg");
}

.payment-bancontact-dark {
  background-image: url("../images/payments/bancontact-dark.svg");
}

.payment-bancontact {
  background-image: url("../images/payments/bancontact.svg");
}

.payment-bitcoin-dark {
  background-image: url("../images/payments/bitcoin-dark.svg");
}

.payment-bitcoin {
  background-image: url("../images/payments/bitcoin.svg");
}

.payment-bitpay-dark {
  background-image: url("../images/payments/bitpay-dark.svg");
}

.payment-bitpay {
  background-image: url("../images/payments/bitpay.svg");
}

.payment-cirrus-dark {
  background-image: url("../images/payments/cirrus-dark.svg");
}

.payment-cirrus {
  background-image: url("../images/payments/cirrus.svg");
}

.payment-clickandbuy-dark {
  background-image: url("../images/payments/clickandbuy-dark.svg");
}

.payment-clickandbuy {
  background-image: url("../images/payments/clickandbuy.svg");
}

.payment-coinkite-dark {
  background-image: url("../images/payments/coinkite-dark.svg");
}

.payment-coinkite {
  background-image: url("../images/payments/coinkite.svg");
}

.payment-dinersclub-dark {
  background-image: url("../images/payments/dinersclub-dark.svg");
}

.payment-dinersclub {
  background-image: url("../images/payments/dinersclub.svg");
}

.payment-directdebit-dark {
  background-image: url("../images/payments/directdebit-dark.svg");
}

.payment-directdebit {
  background-image: url("../images/payments/directdebit.svg");
}

.payment-discover-dark {
  background-image: url("../images/payments/discover-dark.svg");
}

.payment-discover {
  background-image: url("../images/payments/discover.svg");
}

.payment-dwolla-dark {
  background-image: url("../images/payments/dwolla-dark.svg");
}

.payment-dwolla {
  background-image: url("../images/payments/dwolla.svg");
}

.payment-ebay-dark {
  background-image: url("../images/payments/ebay-dark.svg");
}

.payment-ebay {
  background-image: url("../images/payments/ebay.svg");
}

.payment-eway-dark {
  background-image: url("../images/payments/eway-dark.svg");
}

.payment-eway {
  background-image: url("../images/payments/eway.svg");
}

.payment-giropay-dark {
  background-image: url("../images/payments/giropay-dark.svg");
}

.payment-giropay {
  background-image: url("../images/payments/giropay.svg");
}

.payment-googlewallet-dark {
  background-image: url("../images/payments/googlewallet-dark.svg");
}

.payment-googlewallet {
  background-image: url("../images/payments/googlewallet.svg");
}

.payment-ingenico-dark {
  background-image: url("../images/payments/ingenico-dark.svg");
}

.payment-ingenico {
  background-image: url("../images/payments/ingenico.svg");
}

.payment-jcb-dark {
  background-image: url("../images/payments/jcb-dark.svg");
}

.payment-jcb {
  background-image: url("../images/payments/jcb.svg");
}

.payment-klarna-dark {
  background-image: url("../images/payments/klarna-dark.svg");
}

.payment-klarna {
  background-image: url("../images/payments/klarna.svg");
}

.payment-laser-dark {
  background-image: url("../images/payments/laser-dark.svg");
}

.payment-laser {
  background-image: url("../images/payments/laser.svg");
}

.payment-maestro-dark {
  background-image: url("../images/payments/maestro-dark.svg");
}

.payment-maestro {
  background-image: url("../images/payments/maestro.svg");
}

.payment-mastercard-dark {
  background-image: url("../images/payments/mastercard-dark.svg");
}

.payment-mastercard {
  background-image: url("../images/payments/mastercard.svg");
}

.payment-monero-dark {
  background-image: url("../images/payments/monero-dark.svg");
}

.payment-monero {
  background-image: url("../images/payments/monero.svg");
}

.payment-neteller-dark {
  background-image: url("../images/payments/neteller-dark.svg");
}

.payment-neteller {
  background-image: url("../images/payments/neteller.svg");
}

.payment-ogone-dark {
  background-image: url("../images/payments/ogone-dark.svg");
}

.payment-ogone {
  background-image: url("../images/payments/ogone.svg");
}

.payment-okpay-dark {
  background-image: url("../images/payments/okpay-dark.svg");
}

.payment-okpay {
  background-image: url("../images/payments/okpay.svg");
}

.payment-paybox-dark {
  background-image: url("../images/payments/paybox-dark.svg");
}

.payment-paybox {
  background-image: url("../images/payments/paybox.svg");
}

.payment-paymill-dark {
  background-image: url("../images/payments/paymill-dark.svg");
}

.payment-paymill {
  background-image: url("../images/payments/paymill.svg");
}

.payment-payone-dark {
  background-image: url("../images/payments/payone-dark.svg");
}

.payment-payone {
  background-image: url("../images/payments/payone.svg");
}

.payment-payoneer-dark {
  background-image: url("../images/payments/payoneer-dark.svg");
}

.payment-payoneer {
  background-image: url("../images/payments/payoneer.svg");
}

.payment-paypal-dark {
  background-image: url("../images/payments/paypal-dark.svg");
}

.payment-paypal {
  background-image: url("../images/payments/paypal.svg");
}

.payment-paysafecard-dark {
  background-image: url("../images/payments/paysafecard-dark.svg");
}

.payment-paysafecard {
  background-image: url("../images/payments/paysafecard.svg");
}

.payment-payu-dark {
  background-image: url("../images/payments/payu-dark.svg");
}

.payment-payu {
  background-image: url("../images/payments/payu.svg");
}

.payment-payza-dark {
  background-image: url("../images/payments/payza-dark.svg");
}

.payment-payza {
  background-image: url("../images/payments/payza.svg");
}

.payment-ripple-dark {
  background-image: url("../images/payments/ripple-dark.svg");
}

.payment-ripple {
  background-image: url("../images/payments/ripple.svg");
}

.payment-sage-dark {
  background-image: url("../images/payments/sage-dark.svg");
}

.payment-sage {
  background-image: url("../images/payments/sage.svg");
}

.payment-sepa-dark {
  background-image: url("../images/payments/sepa-dark.svg");
}

.payment-sepa {
  background-image: url("../images/payments/sepa.svg");
}

.payment-shopify-dark {
  background-image: url("../images/payments/shopify-dark.svg");
}

.payment-shopify {
  background-image: url("../images/payments/shopify.svg");
}

.payment-skrill-dark {
  background-image: url("../images/payments/skrill-dark.svg");
}

.payment-skrill {
  background-image: url("../images/payments/skrill.svg");
}

.payment-solo-dark {
  background-image: url("../images/payments/solo-dark.svg");
}

.payment-solo {
  background-image: url("../images/payments/solo.svg");
}

.payment-square-dark {
  background-image: url("../images/payments/square-dark.svg");
}

.payment-square {
  background-image: url("../images/payments/square.svg");
}

.payment-stripe-dark {
  background-image: url("../images/payments/stripe-dark.svg");
}

.payment-stripe {
  background-image: url("../images/payments/stripe.svg");
}

.payment-switch-dark {
  background-image: url("../images/payments/switch-dark.svg");
}

.payment-switch {
  background-image: url("../images/payments/switch.svg");
}

.payment-ukash-dark {
  background-image: url("../images/payments/ukash-dark.svg");
}

.payment-ukash {
  background-image: url("../images/payments/ukash.svg");
}

.payment-unionpay-dark {
  background-image: url("../images/payments/unionpay-dark.svg");
}

.payment-unionpay {
  background-image: url("../images/payments/unionpay.svg");
}

.payment-verifone-dark {
  background-image: url("../images/payments/verifone-dark.svg");
}

.payment-verifone {
  background-image: url("../images/payments/verifone.svg");
}

.payment-verisign-dark {
  background-image: url("../images/payments/verisign-dark.svg");
}

.payment-verisign {
  background-image: url("../images/payments/verisign.svg");
}

.payment-visa-dark {
  background-image: url("../images/payments/visa-dark.svg");
}

.payment-visa {
  background-image: url("../images/payments/visa.svg");
}

.payment-webmoney-dark {
  background-image: url("../images/payments/webmoney-dark.svg");
}

.payment-webmoney {
  background-image: url("../images/payments/webmoney.svg");
}

.payment-westernunion-dark {
  background-image: url("../images/payments/westernunion-dark.svg");
}

.payment-westernunion {
  background-image: url("../images/payments/westernunion.svg");
}

.payment-worldpay-dark {
  background-image: url("../images/payments/worldpay-dark.svg");
}

.payment-worldpay {
  background-image: url("../images/payments/worldpay.svg");
}

svg {
  -ms-touch-action: none;
  touch-action: none;
}

.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  -ms-touch-action: none;
  touch-action: none;
}

.jvectormap-tip {
  position: absolute;
  display: none;
  border-radius: 3px;
  background: #212529;
  color: white;
  padding: 6px;
  font-size: 11px;
  line-height: 1;
  font-weight: 700;
}

.jvectormap-tip small {
  font-size: inherit;
  font-weight: 400;
}

.jvectormap-zoomin, .jvectormap-zoomout, .jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #292929;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box;
}

.jvectormap-zoomin, .jvectormap-zoomout {
  width: 10px;
  height: 10px;
}

.jvectormap-zoomin {
  top: 10px;
}

.jvectormap-zoomout {
  top: 30px;
}

.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}

.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}

.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}

.jvectormap-legend-cnt {
  position: absolute;
}

.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}

.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}

.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}

.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}

.jvectormap-legend-tick-text {
  font-size: 12px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}

/**
 * selectize.css (v0.12.4)
 * Copyright (c) 2013–2015 Brian Reavis & contributors
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this
 * file except in compliance with the License. You may obtain a copy of the License at:
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF
 * ANY KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 *
 * @author Brian Reavis <brian@thirdroute.com>
 */
.selectize-control.plugin-drag_drop.multi > .selectize-input > div.ui-sortable-placeholder {
  visibility: visible !important;
  background: #f2f2f2 !important;
  background: rgba(0, 0, 0, 0.06) !important;
  border: 0 none !important;
  box-shadow: inset 0 0 12px 4px #fff;
}

.selectize-control.plugin-drag_drop .ui-sortable-placeholder::after {
  content: '!';
  visibility: hidden;
}

.selectize-control.plugin-drag_drop .ui-sortable-helper {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.selectize-dropdown-header {
  position: relative;
  padding: 5px 8px;
  border-bottom: 1px solid #d0d0d0;
  background: #f8f8f8;
  border-radius: 3px 3px 0 0;
}

.selectize-dropdown-header-close {
  position: absolute;
  right: 8px;
  top: 50%;
  color: #495057;
  opacity: 0.4;
  margin-top: -12px;
  line-height: 20px;
  font-size: 20px !important;
}

.selectize-dropdown-header-close:hover {
  color: #000;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup {
  border-right: 1px solid #f2f2f2;
  border-top: 0 none;
  float: left;
  box-sizing: border-box;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup:last-child {
  border-right: 0 none;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup:before {
  display: none;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup-header {
  border-top: 0 none;
}

.selectize-control.plugin-remove_button [data-value] {
  position: relative;
  padding-right: 24px !important;
}

.selectize-control.plugin-remove_button [data-value] .remove {
  z-index: 1;
  /* fixes ie bug (see #392) */
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 17px;
  text-align: center;
  font-weight: bold;
  font-size: 12px;
  color: inherit;
  text-decoration: none;
  vertical-align: middle;
  display: inline-block;
  padding: 2px 0 0 0;
  border-left: 1px solid #d0d0d0;
  border-radius: 0 2px 2px 0;
  box-sizing: border-box;
}

.selectize-control.plugin-remove_button [data-value] .remove:hover {
  background: rgba(0, 0, 0, 0.05);
}

.selectize-control.plugin-remove_button [data-value].active .remove {
  border-left-color: #cacaca;
}

.selectize-control.plugin-remove_button .disabled [data-value] .remove:hover {
  background: none;
}

.selectize-control.plugin-remove_button .disabled [data-value] .remove {
  border-left-color: #fff;
}

.selectize-control.plugin-remove_button .remove-single {
  position: absolute;
  right: 28px;
  top: 6px;
  font-size: 23px;
}

.selectize-control {
  position: relative;
  padding: 0;
  border: 0;
}

.selectize-dropdown,
.selectize-input,
.selectize-input input {
  color: #495057;
  font-family: inherit;
  font-size: 15px;
  line-height: 18px;
  -webkit-font-smoothing: inherit;
}

.selectize-input,
.selectize-control.single .selectize-input.input-active {
  background: #fff;
  cursor: text;
  display: inline-block;
}

.selectize-input {
  border: 1px solid rgba(0, 40, 100, 0.12);
  padding: 0.5625rem 0.75rem;
  display: inline-block;
  display: block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  box-sizing: border-box;
  border-radius: 3px;
  transition: .3s border-color, .3s box-shadow;
}

.selectize-control.multi .selectize-input.has-items {
  padding: 7px 0.75rem 4px 7px;
}

.selectize-input.full {
  background-color: #fff;
}

.selectize-input.disabled,
.selectize-input.disabled * {
  cursor: default !important;
}

.selectize-input.focus {
  border-color: #467fcf;
  box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.selectize-input.dropdown-active {
  border-radius: 3px 3px 0 0;
}

.selectize-input > * {
  vertical-align: baseline;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}

.selectize-control.multi .selectize-input > div {
  cursor: pointer;
  margin: 0 3px 3px 0;
  padding: 2px 6px;
  background: #e9ecef;
  color: #495057;
  font-size: 13px;
  border: 0 solid rgba(0, 40, 100, 0.12);
  border-radius: 3px;
  font-weight: 400;
}

.selectize-control.multi .selectize-input > div.active {
  background: #e8e8e8;
  color: #303030;
  border: 0 solid #cacaca;
}

.selectize-control.multi .selectize-input.disabled > div,
.selectize-control.multi .selectize-input.disabled > div.active {
  color: #7d7d7d;
  background: #fff;
  border: 0 solid #fff;
}

.selectize-input > input {
  display: inline-block !important;
  padding: 0 !important;
  min-height: 0 !important;
  max-height: none !important;
  max-width: 100% !important;
  margin: 0 2px 0 0 !important;
  text-indent: 0 !important;
  border: 0 none !important;
  background: none !important;
  line-height: inherit !important;
  box-shadow: none !important;
}

.selectize-input > input::-ms-clear {
  display: none;
}

.selectize-input > input:focus {
  outline: none !important;
}

.selectize-input::after {
  content: ' ';
  display: block;
  clear: left;
}

.selectize-input.dropdown-active::before {
  content: ' ';
  display: block;
  position: absolute;
  background: #f0f0f0;
  height: 1px;
  bottom: 0;
  left: 0;
  right: 0;
}

.selectize-dropdown {
  position: absolute;
  z-index: 10;
  border: 1px solid rgba(0, 40, 100, 0.12);
  background: #fff;
  margin: -1px 0 0 0;
  border-top: 0 none;
  box-sizing: border-box;
  border-radius: 0 0 3px 3px;
  height: auto;
  padding: 0;
}

.selectize-dropdown [data-selectable] {
  cursor: pointer;
  overflow: hidden;
}

.selectize-dropdown [data-selectable] .highlight {
  background: rgba(125, 168, 208, 0.2);
  border-radius: 1px;
}

.selectize-dropdown [data-selectable],
.selectize-dropdown .optgroup-header {
  padding: 6px .75rem;
}

.selectize-dropdown .optgroup:first-child .optgroup-header {
  border-top: 0 none;
}

.selectize-dropdown .optgroup-header {
  color: #495057;
  background: #fff;
  cursor: default;
}

.selectize-dropdown .active {
  background-color: #F1F4F8;
  color: #467fcf;
}

.selectize-dropdown .active.create {
  color: #495057;
}

.selectize-dropdown .create {
  color: rgba(48, 48, 48, 0.5);
}

.selectize-dropdown-content {
  overflow-y: auto;
  overflow-x: hidden;
  max-height: 200px;
  -webkit-overflow-scrolling: touch;
}

.selectize-control.single .selectize-input,
.selectize-control.single .selectize-input input {
  cursor: pointer;
}

.selectize-control.single .selectize-input.input-active,
.selectize-control.single .selectize-input.input-active input {
  cursor: text;
}

.selectize-control.single .selectize-input:after {
  content: '';
  display: block;
  position: absolute;
  top: 13px;
  right: 12px;
  width: 8px;
  height: 10px;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 5'%3E%3Cpath fill='#999' d='M0 0L10 0L5 5L0 0'/%3E%3C/svg%3E") no-repeat center;
  background-size: 8px 10px;
  transition: .3s transform;
}

.selectize-control.single .selectize-input.dropdown-active:after {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.selectize-control .selectize-input.disabled {
  opacity: 0.5;
  background-color: #fafafa;
}

.selectize-dropdown .image,
.selectize-input .image {
  width: 1.25rem;
  height: 1.25rem;
  background-size: contain;
  margin: -1px .5rem -1px -4px;
  line-height: 1.25rem;
  float: left;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.selectize-dropdown .image img,
.selectize-input .image img {
  max-width: 100%;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
  border-radius: 2px;
}

.selectize-input .image {
  width: 1.5rem;
  height: 1.5rem;
  margin: -3px .75rem -3px -5px;
}

@font-face {
  font-family: "feather";
  src: url("../fonts/feather/feather-webfont.eot?t=1501841394106");
  /* IE9*/
  src: url("../fonts/feather/feather-webfont.eot?t=1501841394106#iefix") format("embedded-opentype"), url("../fonts/feather/feather-webfont.woff?t=1501841394106") format("woff"), url("../fonts/feather/feather-webfont.ttf?t=1501841394106") format("truetype"), url("../fonts/feather/feather-webfont.svg?t=1501841394106#feather") format("svg");
  /* iOS 4.1- */
}

.fe {
  font-family: 'feather' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.fe-activity:before {
  content: "\e900";
}

.fe-airplay:before {
  content: "\e901";
}

.fe-alert-circle:before {
  content: "\e902";
}

.fe-alert-octagon:before {
  content: "\e903";
}

.fe-alert-triangle:before {
  content: "\e904";
}

.fe-align-center:before {
  content: "\e905";
}

.fe-align-justify:before {
  content: "\e906";
}

.fe-align-left:before {
  content: "\e907";
}

.fe-align-right:before {
  content: "\e908";
}

.fe-anchor:before {
  content: "\e909";
}

.fe-aperture:before {
  content: "\e90a";
}

.fe-arrow-down:before {
  content: "\e90b";
}

.fe-arrow-down-circle:before {
  content: "\e90c";
}

.fe-arrow-down-left:before {
  content: "\e90d";
}

.fe-arrow-down-right:before {
  content: "\e90e";
}

.fe-arrow-left:before {
  content: "\e90f";
}

.fe-arrow-left-circle:before {
  content: "\e910";
}

.fe-arrow-right:before {
  content: "\e911";
}

.fe-arrow-right-circle:before {
  content: "\e912";
}

.fe-arrow-up:before {
  content: "\e913";
}

.fe-arrow-up-circle:before {
  content: "\e914";
}

.fe-arrow-up-left:before {
  content: "\e915";
}

.fe-arrow-up-right:before {
  content: "\e916";
}

.fe-at-sign:before {
  content: "\e917";
}

.fe-award:before {
  content: "\e918";
}

.fe-bar-chart:before {
  content: "\e919";
}

.fe-bar-chart-2:before {
  content: "\e91a";
}

.fe-battery:before {
  content: "\e91b";
}

.fe-battery-charging:before {
  content: "\e91c";
}

.fe-bell:before {
  content: "\e91d";
}

.fe-bell-off:before {
  content: "\e91e";
}

.fe-bluetooth:before {
  content: "\e91f";
}

.fe-bold:before {
  content: "\e920";
}

.fe-book:before {
  content: "\e921";
}

.fe-book-open:before {
  content: "\e922";
}

.fe-bookmark:before {
  content: "\e923";
}

.fe-box:before {
  content: "\e924";
}

.fe-briefcase:before {
  content: "\e925";
}

.fe-calendar:before {
  content: "\e926";
}

.fe-camera:before {
  content: "\e927";
}

.fe-camera-off:before {
  content: "\e928";
}

.fe-cast:before {
  content: "\e929";
}

.fe-check:before {
  content: "\e92a";
}

.fe-check-circle:before {
  content: "\e92b";
}

.fe-check-square:before {
  content: "\e92c";
}

.fe-chevron-down:before {
  content: "\e92d";
}

.fe-chevron-left:before {
  content: "\e92e";
}

.fe-chevron-right:before {
  content: "\e92f";
}

.fe-chevron-up:before {
  content: "\e930";
}

.fe-chevrons-down:before {
  content: "\e931";
}

.fe-chevrons-left:before {
  content: "\e932";
}

.fe-chevrons-right:before {
  content: "\e933";
}

.fe-chevrons-up:before {
  content: "\e934";
}

.fe-chrome:before {
  content: "\e935";
}

.fe-circle:before {
  content: "\e936";
}

.fe-clipboard:before {
  content: "\e937";
}

.fe-clock:before {
  content: "\e938";
}

.fe-cloud:before {
  content: "\e939";
}

.fe-cloud-drizzle:before {
  content: "\e93a";
}

.fe-cloud-lightning:before {
  content: "\e93b";
}

.fe-cloud-off:before {
  content: "\e93c";
}

.fe-cloud-rain:before {
  content: "\e93d";
}

.fe-cloud-snow:before {
  content: "\e93e";
}

.fe-code:before {
  content: "\e93f";
}

.fe-codepen:before {
  content: "\e940";
}

.fe-command:before {
  content: "\e941";
}

.fe-compass:before {
  content: "\e942";
}

.fe-copy:before {
  content: "\e943";
}

.fe-corner-down-left:before {
  content: "\e944";
}

.fe-corner-down-right:before {
  content: "\e945";
}

.fe-corner-left-down:before {
  content: "\e946";
}

.fe-corner-left-up:before {
  content: "\e947";
}

.fe-corner-right-down:before {
  content: "\e948";
}

.fe-corner-right-up:before {
  content: "\e949";
}

.fe-corner-up-left:before {
  content: "\e94a";
}

.fe-corner-up-right:before {
  content: "\e94b";
}

.fe-cpu:before {
  content: "\e94c";
}

.fe-credit-card:before {
  content: "\e94d";
}

.fe-crop:before {
  content: "\e94e";
}

.fe-crosshair:before {
  content: "\e94f";
}

.fe-database:before {
  content: "\e950";
}

.fe-delete:before {
  content: "\e951";
}

.fe-disc:before {
  content: "\e952";
}

.fe-dollar-sign:before {
  content: "\e953";
}

.fe-download:before {
  content: "\e954";
}

.fe-download-cloud:before {
  content: "\e955";
}

.fe-droplet:before {
  content: "\e956";
}

.fe-edit:before {
  content: "\e957";
}

.fe-edit-2:before {
  content: "\e958";
}

.fe-edit-3:before {
  content: "\e959";
}

.fe-external-link:before {
  content: "\e95a";
}

.fe-eye:before {
  content: "\e95b";
}

.fe-eye-off:before {
  content: "\e95c";
}

.fe-facebook:before {
  content: "\e95d";
}

.fe-fast-forward:before {
  content: "\e95e";
}

.fe-feather:before {
  content: "\e95f";
}

.fe-file:before {
  content: "\e960";
}

.fe-file-minus:before {
  content: "\e961";
}

.fe-file-plus:before {
  content: "\e962";
}

.fe-file-text:before {
  content: "\e963";
}

.fe-film:before {
  content: "\e964";
}

.fe-filter:before {
  content: "\e965";
}

.fe-flag:before {
  content: "\e966";
}

.fe-folder:before {
  content: "\e967";
}

.fe-folder-minus:before {
  content: "\e968";
}

.fe-folder-plus:before {
  content: "\e969";
}

.fe-git-branch:before {
  content: "\e96a";
}

.fe-git-commit:before {
  content: "\e96b";
}

.fe-git-merge:before {
  content: "\e96c";
}

.fe-git-pull-request:before {
  content: "\e96d";
}

.fe-github:before {
  content: "\e96e";
}

.fe-gitlab:before {
  content: "\e96f";
}

.fe-globe:before {
  content: "\e970";
}

.fe-grid:before {
  content: "\e971";
}

.fe-hard-drive:before {
  content: "\e972";
}

.fe-hash:before {
  content: "\e973";
}

.fe-headphones:before {
  content: "\e974";
}

.fe-heart:before {
  content: "\e975";
}

.fe-help-circle:before {
  content: "\e976";
}

.fe-home:before {
  content: "\e977";
}

.fe-image:before {
  content: "\e978";
}

.fe-inbox:before {
  content: "\e979";
}

.fe-info:before {
  content: "\e97a";
}

.fe-instagram:before {
  content: "\e97b";
}

.fe-italic:before {
  content: "\e97c";
}

.fe-layers:before {
  content: "\e97d";
}

.fe-layout:before {
  content: "\e97e";
}

.fe-life-buoy:before {
  content: "\e97f";
}

.fe-link:before {
  content: "\e980";
}

.fe-link-2:before {
  content: "\e981";
}

.fe-linkedin:before {
  content: "\e982";
}

.fe-list:before {
  content: "\e983";
}

.fe-loader:before {
  content: "\e984";
}

.fe-lock:before {
  content: "\e985";
}

.fe-log-in:before {
  content: "\e986";
}

.fe-log-out:before {
  content: "\e987";
}

.fe-mail:before {
  content: "\e988";
}

.fe-map:before {
  content: "\e989";
}

.fe-map-pin:before {
  content: "\e98a";
}

.fe-maximize:before {
  content: "\e98b";
}

.fe-maximize-2:before {
  content: "\e98c";
}

.fe-menu:before {
  content: "\e98d";
}

.fe-message-circle:before {
  content: "\e98e";
}

.fe-message-square:before {
  content: "\e98f";
}

.fe-mic:before {
  content: "\e990";
}

.fe-mic-off:before {
  content: "\e991";
}

.fe-minimize:before {
  content: "\e992";
}

.fe-minimize-2:before {
  content: "\e993";
}

.fe-minus:before {
  content: "\e994";
}

.fe-minus-circle:before {
  content: "\e995";
}

.fe-minus-square:before {
  content: "\e996";
}

.fe-monitor:before {
  content: "\e997";
}

.fe-moon:before {
  content: "\e998";
}

.fe-more-horizontal:before {
  content: "\e999";
}

.fe-more-vertical:before {
  content: "\e99a";
}

.fe-move:before {
  content: "\e99b";
}

.fe-music:before {
  content: "\e99c";
}

.fe-navigation:before {
  content: "\e99d";
}

.fe-navigation-2:before {
  content: "\e99e";
}

.fe-octagon:before {
  content: "\e99f";
}

.fe-package:before {
  content: "\e9a0";
}

.fe-paperclip:before {
  content: "\e9a1";
}

.fe-pause:before {
  content: "\e9a2";
}

.fe-pause-circle:before {
  content: "\e9a3";
}

.fe-percent:before {
  content: "\e9a4";
}

.fe-phone:before {
  content: "\e9a5";
}

.fe-phone-call:before {
  content: "\e9a6";
}

.fe-phone-forwarded:before {
  content: "\e9a7";
}

.fe-phone-incoming:before {
  content: "\e9a8";
}

.fe-phone-missed:before {
  content: "\e9a9";
}

.fe-phone-off:before {
  content: "\e9aa";
}

.fe-phone-outgoing:before {
  content: "\e9ab";
}

.fe-pie-chart:before {
  content: "\e9ac";
}

.fe-play:before {
  content: "\e9ad";
}

.fe-play-circle:before {
  content: "\e9ae";
}

.fe-plus:before {
  content: "\e9af";
}

.fe-plus-circle:before {
  content: "\e9b0";
}

.fe-plus-square:before {
  content: "\e9b1";
}

.fe-pocket:before {
  content: "\e9b2";
}

.fe-power:before {
  content: "\e9b3";
}

.fe-printer:before {
  content: "\e9b4";
}

.fe-radio:before {
  content: "\e9b5";
}

.fe-refresh-ccw:before {
  content: "\e9b6";
}

.fe-refresh-cw:before {
  content: "\e9b7";
}

.fe-repeat:before {
  content: "\e9b8";
}

.fe-rewind:before {
  content: "\e9b9";
}

.fe-rotate-ccw:before {
  content: "\e9ba";
}

.fe-rotate-cw:before {
  content: "\e9bb";
}

.fe-rss:before {
  content: "\e9bc";
}

.fe-save:before {
  content: "\e9bd";
}

.fe-scissors:before {
  content: "\e9be";
}

.fe-search:before {
  content: "\e9bf";
}

.fe-send:before {
  content: "\e9c0";
}

.fe-server:before {
  content: "\e9c1";
}

.fe-settings:before {
  content: "\e9c2";
}

.fe-share:before {
  content: "\e9c3";
}

.fe-share-2:before {
  content: "\e9c4";
}

.fe-shield:before {
  content: "\e9c5";
}

.fe-shield-off:before {
  content: "\e9c6";
}

.fe-shopping-bag:before {
  content: "\e9c7";
}

.fe-shopping-cart:before {
  content: "\e9c8";
}

.fe-shuffle:before {
  content: "\e9c9";
}

.fe-sidebar:before {
  content: "\e9ca";
}

.fe-skip-back:before {
  content: "\e9cb";
}

.fe-skip-forward:before {
  content: "\e9cc";
}

.fe-slack:before {
  content: "\e9cd";
}

.fe-slash:before {
  content: "\e9ce";
}

.fe-sliders:before {
  content: "\e9cf";
}

.fe-smartphone:before {
  content: "\e9d0";
}

.fe-speaker:before {
  content: "\e9d1";
}

.fe-square:before {
  content: "\e9d2";
}

.fe-star:before {
  content: "\e9d3";
}

.fe-stop-circle:before {
  content: "\e9d4";
}

.fe-sun:before {
  content: "\e9d5";
}

.fe-sunrise:before {
  content: "\e9d6";
}

.fe-sunset:before {
  content: "\e9d7";
}

.fe-tablet:before {
  content: "\e9d8";
}

.fe-tag:before {
  content: "\e9d9";
}

.fe-target:before {
  content: "\e9da";
}

.fe-terminal:before {
  content: "\e9db";
}

.fe-thermometer:before {
  content: "\e9dc";
}

.fe-thumbs-down:before {
  content: "\e9dd";
}

.fe-thumbs-up:before {
  content: "\e9de";
}

.fe-toggle-left:before {
  content: "\e9df";
}

.fe-toggle-right:before {
  content: "\e9e0";
}

.fe-trash:before {
  content: "\e9e1";
}

.fe-trash-2:before {
  content: "\e9e2";
}

.fe-trending-down:before {
  content: "\e9e3";
}

.fe-trending-up:before {
  content: "\e9e4";
}

.fe-triangle:before {
  content: "\e9e5";
}

.fe-truck:before {
  content: "\e9e6";
}

.fe-tv:before {
  content: "\e9e7";
}

.fe-twitter:before {
  content: "\e9e8";
}

.fe-type:before {
  content: "\e9e9";
}

.fe-umbrella:before {
  content: "\e9ea";
}

.fe-underline:before {
  content: "\e9eb";
}

.fe-unlock:before {
  content: "\e9ec";
}

.fe-upload:before {
  content: "\e9ed";
}

.fe-upload-cloud:before {
  content: "\e9ee";
}

.fe-user:before {
  content: "\e9ef";
}

.fe-user-check:before {
  content: "\e9f0";
}

.fe-user-minus:before {
  content: "\e9f1";
}

.fe-user-plus:before {
  content: "\e9f2";
}

.fe-user-x:before {
  content: "\e9f3";
}

.fe-users:before {
  content: "\e9f4";
}

.fe-video:before {
  content: "\e9f5";
}

.fe-video-off:before {
  content: "\e9f6";
}

.fe-voicemail:before {
  content: "\e9f7";
}

.fe-volume:before {
  content: "\e9f8";
}

.fe-volume-1:before {
  content: "\e9f9";
}

.fe-volume-2:before {
  content: "\e9fa";
}

.fe-volume-x:before {
  content: "\e9fb";
}

.fe-watch:before {
  content: "\e9fc";
}

.fe-wifi:before {
  content: "\e9fd";
}

.fe-wifi-off:before {
  content: "\e9fe";
}

.fe-wind:before {
  content: "\e9ff";
}

.fe-x:before {
  content: "\ea00";
}

.fe-x-circle:before {
  content: "\ea01";
}

.fe-x-square:before {
  content: "\ea02";
}

.fe-zap:before {
  content: "\ea03";
}

.fe-zap-off:before {
  content: "\ea04";
}

.fe-zoom-in:before {
  content: "\ea05";
}

.fe-zoom-out:before {
  content: "\ea06";
}
</style>
    </head>
    <body> 
<div class="page-header">
        <h1 class="page-title">
            Relatorio Diario
        </h1>
    </div>        
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th>Estudante</th>
                  <th>Data</th>
                  <th>Credito</th>
                  <th>Debito</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($accounts as $account)
                    <tr>
                        <td>{{$account->students->name}}</td>
                        <td>{{$account->account_date}}</td>
                        <td class="amount">{{$account->credit}}</td>
                        <td class="amount">{{$account->debit}}</td>
                        <td class="amount">{{$totais}}</td>
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
    </body>
</html>  