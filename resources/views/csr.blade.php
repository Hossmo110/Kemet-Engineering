@extends('layouts.app')

@section('title', 'Corporate Social Responsibility | KEMET Engineering')

@section('content')

    {{-- =====================================================
     CSR HERO
     ===================================================== --}}

    <section class="csr-hero">

        <img src="{{ asset('images/csr-hero.jpg') }}" alt="KEMET Engineering Corporate Social Responsibility"
            class="csr-hero-image">

        <div class="csr-hero-overlay"></div>

        <div class="csr-hero-content">

            <h1>
                Corporate Social Responsibility
                (CSR)
            </h1>

        </div>

    </section>


    {{-- =====================================================
     CSR INTRO
     ===================================================== --}}

    <section class="csr-intro">

        <div class="csr-intro-container">

            <span class="csr-intro-label">
                OUR CSR
            </span>

            <h2>
                Building A Better Future
            </h2>

            <div class="csr-intro-line"></div>

            <p>
                At KEMET Engineering, we believe that successful engineering
                is not only about delivering exceptional projects, but also
                about creating a positive and lasting impact on people,
                communities and the environment.
            </p>

        </div>

    </section>


    {{-- =====================================================
     CSR TABS
     ===================================================== --}}

    <section class="csr-tabs-section">

        <div class="csr-tabs-container">

            {{-- =================================================
             TABS HEADINGS
             ================================================= --}}

            <div class="csr-tabs-heading" role="tablist" aria-label="Corporate Social Responsibility">

                {{-- TAB 01 --}}
                <button type="button" class="csr-tab is-active" id="csr-tab-1" role="tab" aria-selected="true"
                    aria-controls="csr-panel-1" data-tab="1">

                    <span class="csr-tab-icon">

                        {{-- Normal Icon --}}
                        <svg class="csr-icon-normal" xmlns="http://www.w3.org/2000/svg" width="37" height="37"
                            viewBox="0 0 37 37">
                            <path
                                d="M18.5,1.53L2.22,9.29l16.28,7.76,9.92-4.72c.36-.21.72-.01.84.36.14.42-.02.79-.4.97l-10.35,4.93L.37,9.95c-.26-.12-.38-.43-.37-.69.01-.26.15-.51.42-.64L18.5,0l18.13,8.63c.24.11.36.4.37.62.01.26-.13.58-.35.69l-3.04,1.44c-.32.15-.65-.09-.75-.41-.11-.35,0-.75.31-.91l1.58-.79L18.5,1.53Z"
                                fill="#7e7e7e" />
                            <path
                                d="M33.74,36.19c-1.33,1.11-3.01,1.08-4.29-.07-.13-.12-.23-.41-.21-.64l.88-9.03c-.27-.88-.38-1.76-.2-2.66.15-.72.51-1.28,1.11-1.56v-10.07l-12.71-2.89c-.35-.08-.47-.56-.4-.87.09-.37.36-.58.73-.5l13,2.95c.4.09.58.37.58.86v10.52c1.36.67,1.41,2.63.91,4.23l.88,9.03c.03.27-.09.54-.28.71h0ZM32.1,25.74c.21-1.14.17-2.29-.51-2.25-.63.04-.64,1.23-.42,2.25h.93ZM32.78,35.16l-.78-7.98h-.75l-.78,8.04c.75.47,1.66.51,2.3-.06Z"
                                fill="#7e7e7e" />
                            <path
                                d="M29.24,15.65v8.56c0,.19-.11.42-.19.52-6.14,5.92-14.95,5.92-21.1,0-.08-.1-.19-.33-.19-.52v-8.52c0-.42.27-.69.56-.71s.58.22.63.63v8.25c5.57,5.17,13.45,5.22,19.09.01v-8.17c.01-.42.26-.69.57-.71.26-.02.63.21.63.67Z"
                                fill="#7e7e7e" />
                        </svg>

                        {{-- Active Icon --}}
                        <svg class="csr-icon-active" xmlns="http://www.w3.org/2000/svg" width="37" height="37"
                            viewBox="0 0 37 37">
                            <path
                                d="M18.5,1.53L2.22,9.29l16.28,7.76,9.92-4.72c.36-.21.72-.01.84.36.14.42-.02.79-.4.97l-10.35,4.93L.37,9.95c-.26-.12-.38-.43-.37-.69.01-.26.15-.51.42-.64L18.5,0l18.13,8.63c.24.11.36.4.37.62.01.26-.13.58-.35.69l-3.04,1.44c-.32.15-.65-.09-.75-.41-.11-.35,0-.75.31-.91l1.58-.79L18.5,1.53Z"
                                fill="#D6A93D" />
                            <path
                                d="M33.74,36.19c-1.33,1.11-3.01,1.08-4.29-.07-.13-.12-.23-.41-.21-.64l.88-9.03c-.27-.88-.38-1.76-.2-2.66.15-.72.51-1.28,1.11-1.56v-10.07l-12.71-2.89c-.35-.08-.47-.56-.4-.87.09-.37.36-.58.73-.5l13,2.95c.4.09.58.37.58.86v10.52c1.36.67,1.41,2.63.91,4.23l.88,9.03c.03.27-.09.54-.28.71h0ZM32.1,25.74c.21-1.14.17-2.29-.51-2.25-.63.04-.64,1.23-.42,2.25h.93ZM32.78,35.16l-.78-7.98h-.75l-.78,8.04c.75.47,1.66.51,2.3-.06Z"
                                fill="#D6A93D" />
                            <path
                                d="M29.24,15.65v8.56c0,.19-.11.42-.19.52-6.14,5.92-14.95,5.92-21.1,0-.08-.1-.19-.33-.19-.52v-8.52c0-.42.27-.69.56-.71s.58.22.63.63v8.25c5.57,5.17,13.45,5.22,19.09.01v-8.17c.01-.42.26-.69.57-.71.26-.02.63.21.63.67Z"
                                fill="#D6A93D" />
                        </svg>

                    </span>

                    <span class="csr-tab-title">
                        Graduate Pathways Program
                    </span>

                </button>


                {{-- TAB 02 --}}
                <button type="button" class="csr-tab" id="csr-tab-2" role="tab" aria-selected="false"
                    aria-controls="csr-panel-2" data-tab="2">

                    <span class="csr-tab-icon">

                        <svg class="csr-icon-normal" xmlns="http://www.w3.org/2000/svg" width="35" height="37"
                            viewBox="0 0 35 37">
                            <path
                                d="M32.69,33.64h-7.43c-.43,0-.77-.35-.77-.81V12.44c0-.47.31-.84.77-.84h7.38c.34,0,.72.35.72.73v20.49c0,.41-.25.7-.67.82ZM31.84,13.15h-5.81v18.94h5.81V13.15Z"
                                fill="#7e7e7e" />
                            <path d="M35,35.45H.27v1.55h34.73v-1.55Z" fill="#7e7e7e" />
                            <path
                                d="M20.63,33.64h-7.43c-.41,0-.75-.37-.75-.81v-14.07c0-.44.33-.81.76-.81h7.38c.37,0,.67.32.73.7v14.17c0,.4-.26.7-.68.81h0ZM19.78,19.51h-5.82v12.58h5.82v-12.58Z"
                                fill="#7e7e7e" />
                            <path
                                d="M27.57,2.93C19.97,10.58,11.92,16.03.88,15.55c-.5-.02-.85-.27-.88-.74-.03-.47.34-.85.89-.82,10.49.56,18.56-4.95,25.67-12.26l-3.07-.18c-.45-.03-.78-.41-.75-.81.03-.46.4-.76.87-.74l4.97.28c.32.02.66.43.65.76l-.27,5.06c-.02.42-.35.76-.7.78-.41.02-.84-.31-.82-.78l.13-3.17h0Z"
                                fill="#7e7e7e" />
                            <path
                                d="M8.56,33.64H1.14c-.42,0-.75-.39-.75-.8v-9.67c.06-.37.36-.72.74-.72h7.38c.38,0,.68.35.74.72v9.67c0,.39-.27.7-.69.8ZM7.73,24.01H1.91v8.08h5.81v-8.08Z"
                                fill="#7e7e7e" />
                        </svg>

                        <svg class="csr-icon-active" xmlns="http://www.w3.org/2000/svg" width="35" height="37"
                            viewBox="0 0 35 37">
                            <path
                                d="M32.69,33.64h-7.43c-.43,0-.77-.35-.77-.81V12.44c0-.47.31-.84.77-.84h7.38c.34,0,.72.35.72.73v20.49c0,.41-.25.7-.67.82ZM31.84,13.15h-5.81v18.94h5.81V13.15Z"
                                fill="#D6A93D" />
                            <path d="M35,35.45H.27v1.55h34.73v-1.55Z" fill="#D6A93D" />
                            <path
                                d="M20.63,33.64h-7.43c-.41,0-.75-.37-.75-.81v-14.07c0-.44.33-.81.76-.81h7.38c.37,0,.67.32.73.7v14.17c0,.4-.26.7-.68.81h0ZM19.78,19.51h-5.82v12.58h5.82v-12.58Z"
                                fill="#D6A93D" />
                            <path
                                d="M27.57,2.93C19.97,10.58,11.92,16.03.88,15.55c-.5-.02-.85-.27-.88-.74-.03-.47.34-.85.89-.82,10.49.56,18.56-4.95,25.67-12.26l-3.07-.18c-.45-.03-.78-.41-.75-.81.03-.46.4-.76.87-.74l4.97.28c.32.02.66.43.65.76l-.27,5.06c-.02.42-.35.76-.7.78-.41.02-.84-.31-.82-.78l.13-3.17h0Z"
                                fill="#D6A93D" />
                            <path
                                d="M8.56,33.64H1.14c-.42,0-.75-.39-.75-.8v-9.67c.06-.37.36-.72.74-.72h7.38c.38,0,.68.35.74.72v9.67c0,.39-.27.7-.69.8ZM7.73,24.01H1.91v8.08h5.81v-8.08Z"
                                fill="#D6A93D" />
                        </svg>

                    </span>

                    <span class="csr-tab-title">
                        Seeds of Sustainability
                    </span>

                </button>


                {{-- TAB 03 --}}
                <button type="button" class="csr-tab" id="csr-tab-3" role="tab" aria-selected="false"
                    aria-controls="csr-panel-3" data-tab="3">

                    <span class="csr-tab-icon">

                        <svg class="csr-icon-normal" xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                            viewBox="0 0 39 39">
                            <path
                                d="M10.23,34.39l.43.97c.42.94.04,1.94-.91,2.36l-2.52,1.11c-.86.38-1.9.1-2.31-.82L.17,27.23c-.43-.97-.05-1.95.92-2.37l2.51-1.1c1.02-.45,2.11.05,2.43,1.15l5-2.4c.74-.36,1.45-.68,2.23-.93,2.37-.75,4.21.16,6.16,1.47,1.69-.24,3.31-.37,5.07-.4v-4.27c-5.35.78-10.4-2.59-11.7-7.81-.07-.33.11-.6.46-.69,4.22-1.02,8.69.31,11.22,4v-2.56c-1.45-2.26-2.83-4.2-2.15-6.97.38-1.57,1.15-2.97,2.27-4.12.22-.23.58-.31.83-.07,1.08,1.06,1.84,2.35,2.27,3.8.84,2.86-.53,5.06-2.1,7.39v2.59c2.5-3.7,6.99-5.1,11.27-4.06.34.08.53.36.46.7-1.3,5.21-6.35,8.6-11.72,7.8v4.27c1.52.03,2.97.13,4.48.32,1.21.18,2.35.42,3.52.74,1.08-.28,2.14-.43,3.2-.2,1.33.29,2.27,1.34,2.18,2.75-.09,1.41-.91,2.74-2.24,3.26l-11.94,4.62c-1.29.5-3.19.97-4.43.62l-5.88-1.69c-.69-.2-1.36-.07-1.98.23l-2.28,1.12ZM25.61,5.88v3.38c.47-.72.78-1.41,1.05-2.18.25-.84.28-1.68.07-2.53-.28-1.21-.87-2.27-1.66-3.19-1.46,1.76-2.32,4.12-1.42,6.26.25.56.49,1.05.85,1.6l.02-3.36c0-.33.27-.56.55-.55s.55.21.55.57h0ZM20.16,13.6l4.24,2.44c-.32-.73-.7-1.33-1.14-1.97-2.17-2.83-5.72-3.88-9.25-3.25,1.36,4.34,5.68,7.12,10.26,6.45l-4.76-2.77c-.28-.16-.27-.57-.11-.79.15-.2.45-.28.74-.12ZM30.52,14.55l-4.68,2.72c4.59.68,8.92-2.1,10.28-6.45-4.45-.77-8.58,1.06-10.4,5.23l4.22-2.43c.3-.17.64-.1.79.16.15.27.1.6-.21.78h0Z"
                                fill="#7e7e7e" />
                        </svg>

                        <svg class="csr-icon-active" xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                            viewBox="0 0 39 39">
                            <path
                                d="M10.23,34.39l.43.97c.42.94.04,1.94-.91,2.36l-2.52,1.11c-.86.38-1.9.1-2.31-.82L.17,27.23c-.43-.97-.05-1.95.92-2.37l2.51-1.1c1.02-.45,2.11.05,2.43,1.15l5-2.4c.74-.36,1.45-.68,2.23-.93,2.37-.75,4.21.16,6.16,1.47,1.69-.24,3.31-.37,5.07-.4v-4.27c-5.35.78-10.4-2.59-11.7-7.81-.07-.33.11-.6.46-.69,4.22-1.02,8.69.31,11.22,4v-2.56c-1.45-2.26-2.83-4.2-2.15-6.97.38-1.57,1.15-2.97,2.27-4.12.22-.23.58-.31.83-.07,1.08,1.06,1.84,2.35,2.27,3.8.84,2.86-.53,5.06-2.1,7.39v2.59c2.5-3.7,6.99-5.1,11.27-4.06.34.08.53.36.46.7-1.3,5.21-6.35,8.6-11.72,7.8v4.27c1.52.03,2.97.13,4.48.32,1.21.18,2.35.42,3.52.74,1.08-.28,2.14-.43,3.2-.2,1.33.29,2.27,1.34,2.18,2.75-.09,1.41-.91,2.74-2.24,3.26l-11.94,4.62c-1.29.5-3.19.97-4.43.62l-5.88-1.69c-.69-.2-1.36-.07-1.98.23l-2.28,1.12Z"
                                fill="#D6A93D" />
                        </svg>

                    </span>

                    <span class="csr-tab-title">
                        Seeds of Care
                    </span>

                </button>


                {{-- TAB 04 --}}
                <button type="button" class="csr-tab" id="csr-tab-4" role="tab" aria-selected="false"
                    aria-controls="csr-panel-4" data-tab="4">

                    <span class="csr-tab-icon">

                        <svg class="csr-icon-normal" xmlns="http://www.w3.org/2000/svg" width="31" height="27"
                            viewBox="0 0 31 27">
                            <path
                                d="M31,17.43v1.19s-.06,1.38-.06,1.38l-.03.68-.24,5.89c-.01.28-.29.45-.51.42-.22-.03-.41-.21-.4-.48l.35-8.6c0-.22-.03-.4-.08-.62l-1.33,1.32c-.43.43-.66.97-.66,1.59v6.32c0,.29-.2.48-.45.48-.24,0-.46-.19-.46-.48v-6.44c0-.78.33-1.51.86-2.04l1.58-1.59c-.23-.23-.48-.44-.78-.56l-2.33-.89-1.78,2.64c-.37.55-1.08.7-1.7.39l.37,8.48c.01.29-.2.49-.44.49-.26,0-.46-.19-.47-.47l-.35-7.84h-.94s-.35,7.87-.35,7.87c-.01.28-.26.46-.49.44-.23-.02-.43-.2-.42-.48l.37-8.49c-.65.33-1.36.14-1.74-.43l-1.74-2.6-2.38.92-.38.21c-.24.13-.51,0-.61-.21-.1-.21-.02-.49.21-.6l.52-.26,2.49-.97,1.27-1.25c.05-.05.21-.12.3-.15v-1c-.63-.66-1.01-1.44-1.18-2.31-.86.03-1.39-.67-1.38-1.47,0-.6.2-1.13.75-1.42-.23-1.06-.37-2.06-.28-3.09.1-1.1.89-1.95,1.98-2.08C19.77,0,22.03-.28,24.04.25c1.68.44,2.86,1.71,3.21,3.39.21,1.03.15,2.05-.02,3.08.31.34.42.77.41,1.23-.02.81-.57,1.42-1.39,1.42-.16.91-.58,1.66-1.17,2.31v.98s.25.12.25.12l1.3,1.3,2.45.94c1.05.4,1.77,1.32,1.93,2.41ZM26.54,7.33c-.29-.2-1.03.25-1.35-.5l-.33-.77c-2.27.41-5.03.33-6.53-1.5-.17-.2-.15-.47.06-.64.14-.12.44-.15.6.04,1.4,1.63,3.94,1.57,5.97,1.15.3-.06.51.04.62.31l.39.94.39-.03c.14-.89.17-1.72-.02-2.57-.52-2.39-2.84-3.08-5.13-2.79-1.03.13-1.94.55-2.74,1.2-.79,0-1.38.53-1.45,1.33-.08.97.07,1.94.29,2.87l.51.27.36-.38c.17-.18.43-.21.61-.08.16.12.27.4.13.59-.21.29-.47.54-.75.76-.28.22-.64.17-.86-.1-.12-.14-.34-.22-.53-.12-.32.15-.27,1.1.07,1.12.62.03.99.32,1.12.9.38,1.76,1.98,2.96,3.74,2.94,1.79-.03,3.31-1.3,3.66-3.06.1-.49.51-.74.99-.76.45-.02.46-.92.18-1.12Z"
                                fill="#7e7e7e" />
                            <path
                                d="M8.57,26.49c0,.31-.18.48-.42.5-.22.02-.49-.15-.49-.44v-7.47s-.89.72-.89.72c-.43.33-1.03.24-1.31-.23l-1.36-2.19-2.29,1.02,1.34,1.61c.46.6.7,1.28.74,2.05v4.46c0,.29-.21.48-.46.48-.25,0-.45-.2-.45-.48v-4.33c0-.62-.19-1.2-.58-1.66l-1.2-1.43c-.19.38-.3.74-.28,1.17l.27,6.26c.01.27-.2.46-.42.47s-.47-.16-.48-.44l-.21-4.91-.05-1.02c-.15-1.45.6-2.71,1.92-3.28l2.11-.91,1.24-1.24.26-.12-.02-.71c-1.07-.71-1.77-1.76-2.02-3.02-.83.02-1.41-.65-1.36-1.46-.04-.54.14-1.02.58-1.33-.56-2.21.41-4.49,2.37-5.7.06-1.11.67-2.07,1.7-2.55.82-.37,1.74-.39,2.56-.03,1.06.46,1.72,1.44,1.76,2.57,1.96,1.21,2.94,3.47,2.38,5.7.46.33.63.84.58,1.38.02.77-.55,1.44-1.36,1.42-.24,1.26-.96,2.33-2.03,3.03v.68s.25.16.25.16c.47.32.78.9,1.27,1.18.68.39,1.41.64,2.13.96,1.12.51,1.91,1.58,1.86,2.84l-.26,6.36c-.01.26-.25.43-.45.42-.25,0-.46-.19-.45-.48l.26-6.17c.02-.45-.05-.84-.29-1.25l-1.2,1.45c-.36.44-.56,1-.56,1.58v4.42c0,.25-.22.43-.43.45-.23.01-.48-.17-.48-.45v-4.5c.05-.76.27-1.46.75-2.05l1.32-1.61-2.28-1.01-1.38,2.21c-.28.45-.87.52-1.28.22l-.9-.74v7.41s0,0,0,0Z"
                                fill="#7e7e7e" />
                        </svg>

                        <svg class="csr-icon-active" xmlns="http://www.w3.org/2000/svg" width="31" height="27"
                            viewBox="0 0 31 27">
                            <path
                                d="M31,17.43v1.19s-.06,1.38-.06,1.38l-.03.68-.24,5.89c-.01.28-.29.45-.51.42-.22-.03-.41-.21-.4-.48l.35-8.6c0-.22-.03-.4-.08-.62l-1.33,1.32c-.43.43-.66.97-.66,1.59v6.32c0,.29-.2.48-.45.48-.24,0-.46-.19-.46-.48v-6.44c0-.78.33-1.51.86-2.04l1.58-1.59c-.23-.23-.48-.44-.78-.56l-2.33-.89-1.78,2.64c-.37.55-1.08.7-1.7.39l.37,8.48c.01.29-.2.49-.44.49-.26,0-.46-.19-.47-.47l-.35-7.84h-.94s-.35,7.87-.35,7.87c-.01.28-.26.46-.49.44-.23-.02-.43-.2-.42-.48l.37-8.49c-.65.33-1.36.14-1.74-.43l-1.74-2.6-2.38.92-.38.21c-.24.13-.51,0-.61-.21-.1-.21-.02-.49.21-.6l.52-.26,2.49-.97,1.27-1.25c.05-.05.21-.12.3-.15v-1c-.63-.66-1.01-1.44-1.18-2.31-.86.03-1.39-.67-1.38-1.47,0-.6.2-1.13.75-1.42-.23-1.06-.37-2.06-.28-3.09.1-1.1.89-1.95,1.98-2.08C19.77,0,22.03-.28,24.04.25c1.68.44,2.86,1.71,3.21,3.39.21,1.03.15,2.05-.02,3.08.31.34.42.77.41,1.23-.02.81-.57,1.42-1.39,1.42-.16.91-.58,1.66-1.17,2.31v.98s.25.12.25.12l1.3,1.3,2.45.94c1.05.4,1.77,1.32,1.93,2.41Z"
                                fill="#D6A93D" />
                            <path
                                d="M8.57,26.49c0,.31-.18.48-.42.5-.22.02-.49-.15-.49-.44v-7.47s-.89.72-.89.72c-.43.33-1.03.24-1.31-.23l-1.36-2.19-2.29,1.02,1.34,1.61c.46.6.7,1.28.74,2.05v4.46c0,.29-.21.48-.46.48-.25,0-.45-.2-.45-.48v-4.33c0-.62-.19-1.2-.58-1.66l-1.2-1.43c-.19.38-.3.74-.28,1.17l.27,6.26c.01.27-.2.46-.42.47s-.47-.16-.48-.44l-.21-4.91-.05-1.02c-.15-1.45.6-2.71,1.92-3.28l2.11-.91,1.24-1.24.26-.12-.02-.71c-1.07-.71-1.77-1.76-2.02-3.02-.83.02-1.41-.65-1.36-1.46-.04-.54.14-1.02.58-1.33-.56-2.21.41-4.49,2.37-5.7.06-1.11.67-2.07,1.7-2.55.82-.37,1.74-.39,2.56-.03,1.06.46,1.72,1.44,1.76,2.57,1.96,1.21,2.94,3.47,2.38,5.7.46.33.63.84.58,1.38.02.77-.55,1.44-1.36,1.42-.24,1.26-.96,2.33-2.03,3.03v.68s.25.16.25.16c.47.32.78.9,1.27,1.18.68.39,1.41.64,2.13.96,1.12.51,1.91,1.58,1.86,2.84l-.26,6.36c-.01.26-.25.43-.45.42-.25,0-.46-.19-.45-.48l.26-6.17c.02-.45-.05-.84-.29-1.25l-1.2,1.45c-.36.44-.56,1-.56,1.58v4.42c0,.25-.22.43-.43.45-.23.01-.48-.17-.48-.45v-4.5c.05-.76.27-1.46.75-2.05l1.32-1.61-2.28-1.01-1.38,2.21c-.28.45-.87.52-1.28.22l-.9-.74v7.41s0,0,0,0Z"
                                fill="#D6A93D" />
                        </svg>

                    </span>

                    <span class="csr-tab-title">
                        Employee Wellbeing Program
                    </span>

                </button>




            </div>


            {{-- =================================================
             TAB CONTENT
             ================================================= --}}

            <div class="csr-tabs-content">


                {{-- PANEL 01 --}}
                <div class="csr-tab-panel is-active" id="csr-panel-1" role="tabpanel" aria-labelledby="csr-tab-1"
                    data-panel="1">

                    <div class="csr-panel-media">

                        <img src="{{ asset('images/csr-community.jpg') }}" alt="Graduate Pathways Program"
                            loading="lazy">

                    </div>

                    <div class="csr-panel-info">



                        <h3>
                            Graduate Pathways Program
                        </h3>

                        <div class="csr-panel-line"></div>

                        <p>
                            At KEMET Engineering, we believe that the future of
                            engineering starts with developing talented young
                            professionals and giving them the opportunity to
                            build meaningful careers.
                        </p>

                        <p>
                            Our Graduate Pathways Program is designed to support
                            emerging engineers through practical experience,
                            professional development and exposure to real
                            engineering and construction environments.
                        </p>

                        <p>
                            By combining knowledge, mentorship and hands-on
                            experience, we aim to help young professionals
                            develop the skills and confidence required to
                            contribute to the future of the engineering industry.
                        </p>

                    </div>

                </div>


                {{-- PANEL 02 --}}
                <div class="csr-tab-panel" id="csr-panel-2" role="tabpanel" aria-labelledby="csr-tab-2" data-panel="2"
                    hidden>

                    <div class="csr-panel-media">

                        <img src="{{ asset('images/csr-sustainable.jpg') }}" alt="Seeds of Sustainability"
                            loading="lazy">

                    </div>

                    <div class="csr-panel-info">


                        <h3>
                            Seeds of Sustainability
                        </h3>

                        <div class="csr-panel-line"></div>

                        <p>
                            Sustainability is an important part of the way
                            KEMET Engineering approaches modern engineering
                            and construction.
                        </p>

                        <p>
                            We explore responsible material selection,
                            efficient resource utilization, waste reduction
                            and digital engineering solutions that can help
                            reduce environmental impact.
                        </p>

                        <p>
                            Through practical engineering decisions, we aim
                            to support projects that deliver long-term value
                            while respecting the environment and the resources
                            available to future generations.
                        </p>

                    </div>

                </div>


                {{-- PANEL 03 --}}
                <div class="csr-tab-panel" id="csr-panel-3" role="tabpanel" aria-labelledby="csr-tab-3" data-panel="3"
                    hidden>

                    <div class="csr-panel-media">

                        <img src="{{ asset('images/csr-care.jpg') }}" alt="Seeds of Care" loading="lazy">

                    </div>

                    <div class="csr-panel-info">



                        <h3>
                            Seeds of Care
                        </h3>

                        <div class="csr-panel-line"></div>

                        <p>
                            KEMET Engineering believes that responsible
                            engineering begins with caring for the people
                            who make our projects possible.
                        </p>

                        <p>
                            We are committed to creating an environment built
                            around respect, collaboration, inclusion and
                            professional development.
                        </p>

                        <p>
                            Our approach extends beyond the workplace as we
                            seek opportunities to contribute positively to
                            the communities around our projects and operations.
                        </p>

                    </div>

                </div>


                {{-- PANEL 04 --}}
                <div class="csr-tab-panel" id="csr-panel-4" role="tabpanel" aria-labelledby="csr-tab-4" data-panel="4"
                    hidden>

                    <div class="csr-panel-media">

                        <img src="{{ asset('images/csr-safety.jpg') }}" alt="Employee Wellbeing Program" loading="lazy">

                    </div>

                    <div class="csr-panel-info">



                        <h3>
                            Employee Wellbeing Program
                        </h3>

                        <div class="csr-panel-line"></div>

                        <p>
                            Our people are at the heart of KEMET Engineering.
                            We strive to create a professional environment
                            where employees can grow, collaborate and perform
                            at their best.
                        </p>

                        <p>
                            Employee wellbeing is supported through a strong
                            focus on workplace safety, professional development,
                            communication and a healthy working environment.
                        </p>

                        <p>
                            By investing in our people, we strengthen our teams
                            and create a culture that supports both individual
                            growth and long-term organizational success.
                        </p>

                    </div>

                </div>



    </section>


    {{-- =====================================================
     CSR CLOSING SECTION
     ===================================================== --}}

    <section class="csr-closing">

        <div class="csr-closing-content">

            <span>
                OUR COMMITMENT
            </span>

            <h2>
                Engineering With Purpose
            </h2>

            <div class="csr-closing-line"></div>

            <p>
                We believe that the future of engineering depends on
                responsible innovation, strong communities and sustainable
                solutions. KEMET Engineering is committed to making every
                project an opportunity to create lasting value.
            </p>

        </div>

    </section>


    {{-- =====================================================
     PAGE NAVIGATION
     ===================================================== --}}

    <section class="page-navigation-section">

        <div class="page-navigation">

            <a href="{{ url('/businesses') }}" class="page-nav-link page-nav-prev">

                <span class="page-nav-arrow">
                    ←
                </span>

                <span class="page-nav-label">
                    Our Businesses
                </span>

            </a>


            <a href="{{ url('/contact') }}" class="page-nav-link page-nav-next">

                <span class="page-nav-label">
                    Contact Us
                </span>

                <span class="page-nav-arrow">
                    →
                </span>

            </a>

        </div>

    </section>


    {{-- =====================================================
     CSR TABS SCRIPT
     ===================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const tabs = document.querySelectorAll('.csr-tab');
            const panels = document.querySelectorAll('.csr-tab-panel');

            tabs.forEach(function(tab) {

                tab.addEventListener('click', function() {

                    const tabNumber = tab.getAttribute('data-tab');

                    /*
                     * Remove active state from all tabs
                     */
                    tabs.forEach(function(item) {

                        item.classList.remove('is-active');

                        item.setAttribute(
                            'aria-selected',
                            'false'
                        );

                        item.setAttribute(
                            'tabindex',
                            '-1'
                        );

                    });


                    /*
                     * Hide all panels
                     */
                    panels.forEach(function(panel) {

                        panel.classList.remove('is-active');

                        panel.hidden = true;

                    });


                    /*
                     * Activate selected tab
                     */
                    tab.classList.add('is-active');

                    tab.setAttribute(
                        'aria-selected',
                        'true'
                    );

                    tab.setAttribute(
                        'tabindex',
                        '0'
                    );


                    /*
                     * Show selected panel
                     */
                    const activePanel =
                        document.querySelector(
                            '.csr-tab-panel[data-panel="' +
                            tabNumber +
                            '"]'
                        );

                    if (activePanel) {

                        activePanel.hidden = false;

                        /*
                         * Small delay allows CSS transition
                         */
                        requestAnimationFrame(function() {

                            activePanel.classList.add('is-active');

                        });

                    }

                });


                /*
                 * Keyboard navigation
                 */
                tab.addEventListener('keydown', function(event) {

                    const currentIndex =
                        Array.from(tabs).indexOf(tab);

                    let nextIndex = currentIndex;

                    if (event.key === 'ArrowRight') {

                        nextIndex =
                            (currentIndex + 1) % tabs.length;

                    }

                    if (event.key === 'ArrowLeft') {

                        nextIndex =
                            (currentIndex - 1 + tabs.length) %
                            tabs.length;

                    }

                    if (event.key === 'Home') {

                        nextIndex = 0;

                    }

                    if (event.key === 'End') {

                        nextIndex = tabs.length - 1;

                    }

                    if (nextIndex !== currentIndex) {

                        event.preventDefault();

                        tabs[nextIndex].focus();

                        tabs[nextIndex].click();

                    }

                });

            });

        });
    </script>

@endsection
