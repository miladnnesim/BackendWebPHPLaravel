<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
       



small {
    font-size: 80%
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,
select {
    text-transform: none
}

button,
input:where([type=button]),
input:where([type=reset]),
input:where([type=submit]) {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}


dialog {
    padding: 0
}

textarea {
    resize: vertical
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af
}

input::placeholder,
textarea::placeholder {
    opacity: 1;
    color: #9ca3af
}

button,
[role=button] {
    cursor: pointer
}

:disabled {
    cursor: default
}

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
    display: block;
    vertical-align: middle
}

img,
video {
    max-width: 100%;
    height: auto
}

[hidden]:where(:not([hidden=until-found])) {
    display: none
}

[type=text],
input:where(:not([type])),
[type=email],
[type=url],
[type=password],
[type=number],
[type=date],
[type=datetime-local],
[type=month],
[type=search],
[type=tel],
[type=time],
[type=week],
[multiple],
textarea,
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    border-radius: 0;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000
}

[type=text]:focus,
input:where(:not([type])):focus,
[type=email]:focus,
[type=url]:focus,
[type=password]:focus,
[type=number]:focus,
[type=date]:focus,
[type=datetime-local]:focus,
[type=month]:focus,
[type=search]:focus,
[type=tel]:focus,
[type=time]:focus,
[type=week]:focus,
[multiple]:focus,
textarea:focus,
select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    border-color: #2563eb
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    color: #6b7280;
    opacity: 1
}

input::placeholder,
textarea::placeholder {
    color: #6b7280;
    opacity: 1
}

::-webkit-datetime-edit-fields-wrapper {
    padding: 0
}

::-webkit-date-and-time-value {
    min-height: 1.5em;
    text-align: inherit
}

::-webkit-datetime-edit {
    display: inline-flex
}

::-webkit-datetime-edit,
::-webkit-datetime-edit-year-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-minute-field,
::-webkit-datetime-edit-second-field,
::-webkit-datetime-edit-millisecond-field,
::-webkit-datetime-edit-meridiem-field {
    padding-top: 0;
    padding-bottom: 0
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

[multiple],
[size]:where(select:not([size="1"])) {
    background-image: initial;
    background-position: initial;
    background-repeat: unset;
    background-size: initial;
    padding-right: .75rem;
    -webkit-print-color-adjust: unset;
    print-color-adjust: unset
}

[type=checkbox],
[type=radio] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    flex-shrink: 0;
    height: 1rem;
    width: 1rem;
    color: #2563eb;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    --tw-shadow: 0 0 #0000
}

[type=checkbox] {
    border-radius: 0
}

[type=radio] {
    border-radius: 100%
}

[type=checkbox]:focus,
[type=radio]:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 2px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
}

[type=checkbox]:checked,
[type=radio]:checked {
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

[type=checkbox]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}


[type=radio]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}

[type=checkbox]:checked:hover,
[type=checkbox]:checked:focus,
[type=radio]:checked:hover,
[type=radio]:checked:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=checkbox]:indeterminate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}


[type=checkbox]:indeterminate:hover,
[type=checkbox]:indeterminate:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=file] {
    background: unset;
    border-color: inherit;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-size: unset;
    line-height: inherit
}

[type=file]:focus {
    outline: 1px solid ButtonText;
    outline: 1px auto -webkit-focus-ring-color
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}

.-bottom-16 {
    bottom: -4rem
}

.-left-16 {
    left: -4rem
}

.-left-20 {
    left: -5rem
}

.end-0 {
    inset-inline-end: 0px
}

.start-0 {
    inset-inline-start: 0px
}

.top-0 {
    top: 0
}

.z-0 {
    z-index: 0
}

.z-50 {
    z-index: 50
}

.\!row-span-1 {
    grid-row: span 1 / span 1 !important
}

.-mx-3 {
    margin-left: -.75rem;
    margin-right: -.75rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.-me-2 {
    margin-inline-end: -.5rem
}

.-ml-px {
    margin-left: -1px
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.ml-3 {
    margin-left: .75rem
}

.ms-1 {
    margin-inline-start: .25rem
}

.ms-2 {
    margin-inline-start: .5rem
}

.ms-3 {
    margin-inline-start: .75rem
}

.ms-4 {
    margin-inline-start: 1rem
}

.mt-1 {
    margin-top: .25rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-6 {
    margin-top: 1.5rem
}

.block {
    display: block
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.table {
    display: table
}

.grid {
    display: grid
}

.\!hidden {
    display: none !important
}

.hidden {
    display: none
}

.aspect-video {
    aspect-ratio: 16 / 9
}

.size-12 {
    width: 3rem;
    height: 3rem
}

.size-5 {
    width: 1.25rem;
    height: 1.25rem
}

.size-6 {
    width: 1.5rem;
    height: 1.5rem
}

.h-12 {
    height: 3rem
}

.h-16 {
    height: 4rem
}

.h-20 {
    height: 5rem
}

.h-4 {
    height: 1rem
}

.h-40 {
    height: 10rem
}

.h-5 {
    height: 1.25rem
}

.h-6 {
    height: 1.5rem
}

.h-9 {
    height: 2.25rem
}

.h-full {
    height: 100%
}

.min-h-screen {
    min-height: 100vh
}

.w-20 {
    width: 5rem
}

.w-3\/4 {
    width: 75%
}

.w-4 {
    width: 1rem
}

.w-48 {
    width: 12rem
}

.w-5 {
    width: 1.25rem
}

.w-6 {
    width: 1.5rem
}

.w-\[calc\(100\%\+8rem\)\] {
    width: calc(100% + 8rem)
}

.w-auto {
    width: auto
}

.w-full {
    width: 100%
}

.max-w-2xl {
    max-width: 42rem
}

.max-w-7xl {
    max-width: 80rem
}

.max-w-\[877px\] {
    max-width: 877px
}

.max-w-xl {
    max-width: 36rem
}

.flex-1 {
    flex: 1 1 0%
}

.shrink-0 {
    flex-shrink: 0
}

.origin-top {
    transform-origin: top
}

.translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-4 {
    --tw-translate-y: 1rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.cursor-default {
    cursor: default
}

.resize {
    resize: both
}

.grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr))
}

.\!flex-row {
    flex-direction: row !important
}

.flex-col {
    flex-direction: column
}

.items-start {
    align-items: flex-start
}

.items-center {
    align-items: center
}

.items-stretch {
    align-items: stretch
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.justify-items-center {
    justify-items: center
}

.gap-2 {
    gap: .5rem
}

.gap-4 {
    gap: 1rem
}

.gap-6 {
    gap: 1.5rem
}

.space-x-8>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
}

.space-y-6>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
}

.self-center {
    align-self: center
}

.overflow-hidden {
    overflow: hidden
}

.overflow-y-auto {
    overflow-y: auto
}

.overflow-y-hidden {
    overflow-y: hidden
}

.rounded {
    border-radius: .25rem
}

.rounded-\[10px\] {
    border-radius: 10px
}

.rounded-full {
    border-radius: 9999px
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-sm {
    border-radius: .125rem
}

.rounded-l-md {
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem
}

.rounded-r-md {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem
}

.border {
    border-width: 1px
}

.border-b {
    border-bottom-width: 1px
}

.border-b-2 {
    border-bottom-width: 2px
}

.border-l-4 {
    border-left-width: 4px
}

.border-t {
    border-top-width: 1px
}

.border-gray-100 {
    --tw-border-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-border-opacity, 1))
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity, 1))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
}

.border-indigo-400 {
    --tw-border-opacity: 1;
    border-color: rgb(129 140 248 / var(--tw-border-opacity, 1))
}

.border-transparent {
    border-color: transparent
}

.bg-\[\#FF2D20\]\/10 {
    background-color: #ff2d201a
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
}

.bg-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity, 1))
}

.bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
}

.bg-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(238 242 255 / var(--tw-bg-opacity, 1))
}

.bg-red-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 38 38 / var(--tw-bg-opacity, 1))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
}

.bg-gradient-to-b {
    background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
}

.from-transparent {
    --tw-gradient-from: transparent var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
}

.fill-current {
    fill: currentColor
}

.stroke-\[\#FF2D20\] {
    stroke: #ff2d20
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover
}

.object-top {
    -o-object-position: top;
    object-position: top
}

.p-2 {
    padding: .5rem
}

.p-4 {
    padding: 1rem
}

.p-6 {
    padding: 1.5rem
}

.px-1 {
    padding-left: .25rem;
    padding-right: .25rem
}

.px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.px-3 {
    padding-left: .75rem;
    padding-right: .75rem
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

.py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem
}

.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem
}

.py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem
}

.py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem
}

.py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
}

.pb-1 {
    padding-bottom: .25rem
}

.pb-3 {
    padding-bottom: .75rem
}

.pe-4 {
    padding-inline-end: 1rem
}

.ps-3 {
    padding-inline-start: .75rem
}

.pt-1 {
    padding-top: .25rem
}

.pt-2 {
    padding-top: .5rem
}

.pt-3 {
    padding-top: .75rem
}

.pt-4 {
    padding-top: 1rem
}

.pt-6 {
    padding-top: 1.5rem
}

.text-center {
    text-align: center
}


.text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.text-sm\/relaxed {
    font-size: .875rem;
    line-height: 1.625
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.font-medium {
    font-weight: 500
}

.font-semibold {
    font-weight: 600
}

.uppercase {
    text-transform: uppercase
}

.leading-4 {
    line-height: 1rem
}

.leading-5 {
    line-height: 1.25rem
}

.leading-tight {
    line-height: 1.25
}

.tracking-widest {
    letter-spacing: .1em
}

.text-black {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity, 1))
}

.text-black\/50 {
    color: #00000080
}

.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
}

.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity, 1))
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
}

.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
}

.text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity, 1))
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity, 1))
}

.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74 / var(--tw-text-opacity, 1))
}

.text-indigo-600 {
    --tw-text-opacity: 1;
    color: rgb(79 70 229 / var(--tw-text-opacity, 1))
}

.text-indigo-700 {
    --tw-text-opacity: 1;
    color: rgb(67 56 202 / var(--tw-text-opacity, 1))
}

.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity, 1))
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
}

.underline {
    text-decoration-line: underline
}

.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.opacity-0 {
    opacity: 0
}

.opacity-100 {
    opacity: 1
}

.opacity-75 {
    opacity: .75
}

.shadow {
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
    --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
    --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-md {
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / .1), 0 8px 10px -6px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
}

.ring-gray-300 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
}

.ring-transparent {
    --tw-ring-color: transparent
}

.ring-white {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
}

.ring-white\/\[0\.05\] {
    --tw-ring-color: rgb(255 255 255 / .05)
}

.ring-opacity-5 {
    --tw-ring-opacity: .05
}

.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.filter {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.transition {
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-duration: .15s
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-duration: .15s
}

.duration-150 {
    transition-duration: .15s
}

.duration-200 {
    transition-duration: .2s
}

.duration-300 {
    transition-duration: .3s
}

.duration-75 {
    transition-duration: 75ms
}

.ease-in {
    transition-timing-function: cubic-bezier(.4, 0, 1, 1)
}

.ease-in-out {
    transition-timing-function: cubic-bezier(.4, 0, .2, 1)
}

.ease-out {
    transition-timing-function: cubic-bezier(0, 0, .2, 1)
}

.selection\:bg-\[\#FF2D20\] *::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
}

.selection\:bg-\[\#FF2D20\] *::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
}

.selection\:text-white *::-moz-selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
}

.selection\:text-white *::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
}

.selection\:bg-\[\#FF2D20\]::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
}

.selection\:bg-\[\#FF2D20\]::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
}

.selection\:text-white::-moz-selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
}

.selection\:text-white::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
}

.hover\:border-gray-300:hover {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
}

.hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
}

.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
}

.hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
}

.hover\:bg-red-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity, 1))
}

.hover\:text-black:hover {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity, 1))
}

.hover\:text-black\/70:hover {
    color: #000000b3
}

.hover\:text-gray-400:hover {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
}

.hover\:text-gray-500:hover {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity, 1))
}

.hover\:text-gray-700:hover {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
}

.hover\:text-gray-800:hover {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity, 1))
}

.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity, 1))
}

.hover\:ring-black\/20:hover {
    --tw-ring-color: rgb(0 0 0 / .2)
}

.focus\:z-10:focus {
    z-index: 10
}

.focus\:border-blue-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
}

.focus\:border-gray-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
}

.focus\:border-indigo-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241 / var(--tw-border-opacity, 1))
}

.focus\:border-indigo-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(67 56 202 / var(--tw-border-opacity, 1))
}

.focus\:bg-gray-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
}

.focus\:bg-gray-50:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
}

.focus\:bg-gray-700:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
}

.focus\:bg-indigo-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(224 231 255 / var(--tw-bg-opacity, 1))
}

.focus\:text-gray-500:focus {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity, 1))
}

.focus\:text-gray-700:focus {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
}

.focus\:text-gray-800:focus {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity, 1))
}

.focus\:text-indigo-800:focus {
    --tw-text-opacity: 1;
    color: rgb(55 48 163 / var(--tw-text-opacity, 1))
}

.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-indigo-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity, 1))
}

.focus\:ring-red-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity, 1))
}

.focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px
}

.focus-visible\:ring-1:focus-visible {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus-visible\:ring-\[\#FF2D20\]:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
}

.active\:bg-gray-100:active {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
}

.active\:bg-gray-900:active {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity, 1))
}

.active\:bg-red-700:active {
    --tw-bg-opacity: 1;
    background-color: rgb(185 28 28 / var(--tw-bg-opacity, 1))
}

.active\:text-gray-500:active {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity, 1))
}

.active\:text-gray-700:active {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
}

.disabled\:opacity-25:disabled {
    opacity: .25
}



        </style>

</head>
<body>
    <main>
        <nav class="navbar">
            
                <a href="{{ route('home') }}"><img src="Images/ValoMate.png" alt=""></a>
                <ul>
                <li><a  href="{{ route('lft') }}">Looking for Team</a></li>
                <li><a  href="{{ route('faq') }}">FAQ</a></li>
                <li><a  href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('profile.edit') }}"><img src="Images/Iconprofile.png" alt=""></a></li>
            </ul>
        </nav>
        
        @yield ('content')
    </main>
</body>
</html>