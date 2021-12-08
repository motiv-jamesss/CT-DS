<!DOCTYPE html>
<html lang="en">
  <!-- header include start -->
  <?php
    include '../include/header.php';
  ?>
  <!-- header include end -->
    <div class="docsMainContent" data-bs-target="#docContents">
      <div class="title mb-32">
        <h1 class="uiFnt wgt-700 txt-32 mb-16">Cross Target Design System Document 📚</h1>
        <h3 class="uiFnt wgt-300 mono-600">version 0.1, 2021 11 18</h3>
      </div>
      <div class="dvid-grey200 my-32"></div>
    <div class="colorContent" id="item-3">
      <h2 class="uiFnt wgt-700 txt-32 pt-64">Color</h2>
      <p class="mt-16 mono-600">
        크로스타겟을 이루고 있는 다섯가지의 컬러와 해당 컬러마다 5단계의 컨트라스트를 가지며 <mark>color-100(~500)</mark>으로 정의 되어있습니다.<br>
        모노크롬은 크로스타겟의 검정~회색에 해당합니다. 총 8단계의 컨트라스트를 가지고 있으며 모노크롬은 <mark>mono-100(~800)</mark>으로 정의되어있습니다.
      </p>
      <p class="mt-16 mono-600">
        플랫폼 내부의 배경과 객체 컬러에도 사용이 가능하도록 클레스명으로 자유로이 작성 할 수 있으며<br>
        배경적용에는 <mark>.bgColor-blue100</mark>, <mark>.bgMono-100</mark>, 객체컬러 적용에는 <mark>.color-blue100</mark>, <mark>.mono-100</mark> 등과 같이 사용할 수 있습니다
      </p>
      <div class="dvid-grey100 my-32"></div>
      <div id="colors">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt wgt-700">Colors</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#colorsMarkup">
              <span class="dev-icon">
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3926 1.66658L16.7259 4.99992L13.3926 8.33325" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4.44055 8.33342L1.10722 5.00008L4.44055 1.66675" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.9998 1L6.99976 9" stroke="#78A1F2" stroke-linecap="round"/>
                </svg>
              </span>
              Markup
            </a>
            <!-- markup Trilgger -->
            <!-- markup Content -->
            <div class="modal fade" id="colorsMarkup" tabindex="-1" aria-labelledby="colorsMarkupLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="colorsMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- 기본형태 -->
                      &lt;div class="bgColor-blue200"&gt;
                        &lt;p class="color-blue300"&gt;크로스타겟&lt;/p&gt;
                      &lt;/div&gt;
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="quaternary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- css Content -->
            <!-- css Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#colorsCSS">
              <span class="dev-icon">
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3926 1.66658L16.7259 4.99992L13.3926 8.33325" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4.44055 8.33342L1.10722 5.00008L4.44055 1.66675" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.9998 1L6.99976 9" stroke="#78A1F2" stroke-linecap="round"/>
                </svg>
              </span>
              SCSS
            </a>
            <!-- css Trilgger -->
            <!-- css Content -->
            <div class="modal fade" id="colorsCSS" tabindex="-1" aria-labelledby="colorsCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="colorsCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      //  >>> colors <<<  //

                      // blue
                      $color-blue500 : #295CC2;
                      $color-blue400 : #3270EC;
                      $color-blue300 : #4A81EE;
                      $color-blue200 : #78A1F2;
                      $color-blue100 : #DCE6F9;
                      
                      // red
                      $color-red500 : #D25151;
                      $color-red400 : #FF5757;
                      $color-red300 : #FF6E6E;
                      $color-red200 : #FFA3A3;
                      $color-red100 : #F9DCDC;

                      // green
                      $color-green500 : #2B9777;
                      $color-green400 : #34BB93;
                      $color-green300 : #41CAA1;
                      $color-green200 : #67D5B4;
                      $color-green100 : #DCF9F0;

                      // yellow
                      $color-yellow500 : #B77B0B;
                      $color-yellow400 : #FAA200;
                      $color-yellow300 : #FFB01F;
                      $color-yellow200 : #FFC252;
                      $color-yellow100 : #F9EFDC;

                      // purple
                      $color-purple500 : #814F92;
                      $color-purple400 : #9F5FB4;
                      $color-purple300 : #A970BC;
                      $color-purple200 : #BE93CD;
                      $color-purple100 : #F2DCF9;
                      

                      //  >>> use in code <<<  //

                      .color {
                        &-blue {
                          &500 {
                            color: $color-blue500;
                          }

                          &400 {
                            color: $color-blue400;
                          }

                          &300 {
                            color: $color-blue300;
                          }

                          &200 {
                            color: $color-blue200;
                          }

                          &100 {
                            color: $color-blue100;
                          }
                        }

                        &-red {
                          &500 {
                            color: $color-red500;
                          }

                          &400 {
                            color: $color-red400;
                          }

                          &300 {
                            color: $color-red300;
                          }

                          &200 {
                            color: $color-red200;
                          }

                          &100 {
                            color: $color-red100;
                          }
                        }

                        &-green {
                          &500 {
                            color: $color-green500;
                          }

                          &400 {
                            color: $color-green400;
                          }

                          &300 {
                            color: $color-green300;
                          }

                          &200 {
                            color: $color-green200;
                          }

                          &100 {
                            color: $color-green100;
                          }
                        }

                        &-yellow {
                          &500 {
                            color: $color-yellow500;
                          }

                          &400 {
                            color: $color-yellow400;
                          }

                          &300 {
                            color: $color-yellow300;
                          }

                          &200 {
                            color: $color-yellow200;
                          }

                          &100 {
                            color: $color-yellow100;
                          }
                        }

                        &-purple {
                          &500 {
                            color: $color-purple500;
                          }

                          &400 {
                            color: $color-purple400;
                          }

                          &300 {
                            color: $color-purple300;
                          }

                          &200 {
                            color: $color-purple200;
                          }

                          &100 {
                            color: $color-purple100;
                          }
                        }
                      }

                      .bgColor {
                        &-blue {
                          &500 {
                            background-color: $color-blue500;
                          }

                          &400 {
                            background-color: $color-blue400;
                          }

                          &300 {
                            background-color: $color-blue300;
                          }

                          &200 {
                            background-color: $color-blue200;
                          }

                          &100 {
                            background-color: $color-blue100;
                          }
                        }

                        &-red {
                          &500 {
                            background-color: $color-red500;
                          }

                          &400 {
                            background-color: $color-red400;
                          }

                          &300 {
                            background-color: $color-red300;
                          }

                          &200 {
                            background-color: $color-red200;
                          }

                          &100 {
                            background-color: $color-red100;
                          }
                        }

                        &-green {
                          &500 {
                            background-color: $color-green500;
                          }

                          &400 {
                            background-color: $color-green400;
                          }

                          &300 {
                            background-color: $color-green300;
                          }

                          &200 {
                            background-color: $color-green200;
                          }

                          &100 {
                            background-color: $color-green100;
                          }
                        }

                        &-yellow {
                          &500 {
                            background-color: $color-yellow500;
                          }

                          &400 {
                            background-color: $color-yellow400;
                          }

                          &300 {
                            background-color: $color-yellow300;
                          }

                          &200 {
                            background-color: $color-yellow200;
                          }

                          &100 {
                            background-color: $color-yellow100;
                          }
                        }

                        &-purple {
                          &500 {
                            background-color: $color-purple500;
                          }

                          &400 {
                            background-color: $color-purple400;
                          }

                          &300 {
                            background-color: $color-purple300;
                          }

                          &200 {
                            background-color: $color-purple200;
                          }

                          &100 {
                            background-color: $color-purple100;
                          }
                        }
                      }
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="quaternary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- css Content -->
          </div>
        </div>
        <div class="d-flex color-item-container" id="blue">
          <div class="color-item bgColor-blue500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">blue500</p>
              <p class="uiFnt size-12 wgt-300 white">#295CC2</p>
            </div>
          </div>
          <div class="color-item bgColor-blue400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">blue400</p>
              <p class="uiFnt size-12 wgt-300 white">#3270EC</p>
            </div>
          </div>
          <div class="color-item bgColor-blue300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">blue300</p>
              <p class="uiFnt size-12 wgt-300 white">#4A81EE</p>
            </div>
          </div>
          <div class="color-item bgColor-blue200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">blue200</p>
              <p class="uiFnt size-12 wgt-300 white">#78A1F2</p>
            </div>
          </div>
          <div class="color-item bgColor-blue100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">blue100</p>
              <p class="uiFnt size-12 wgt-300 white">#DCE6F9</p>
            </div>
          </div>
        </div>
        <div class="d-flex color-item-container mt-16" id="red">
          <div class="color-item bgColor-red500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">red500</p>
              <p class="uiFnt size-12 wgt-300 white">#D25151</p>
            </div>
          </div>
          <div class="color-item bgColor-red400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">red400</p>
              <p class="uiFnt size-12 wgt-300 white">#FF5757</p>
            </div>
          </div>
          <div class="color-item bgColor-red300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">red300</p>
              <p class="uiFnt size-12 wgt-300 white">#FF6E6E</p>
            </div>
          </div>
          <div class="color-item bgColor-red200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">red200</p>
              <p class="uiFnt size-12 wgt-300 white">#FFA3A3</p>
            </div>
          </div>
          <div class="color-item bgColor-red100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">red100</p>
              <p class="uiFnt size-12 wgt-300 white">#F9DCDC</p>
            </div>
          </div>
        </div>
        <div class="d-flex color-item-container mt-16" id="green">
          <div class="color-item bgColor-green500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">green500</p>
              <p class="uiFnt size-12 wgt-300 white">#2B9777</p>
            </div>
          </div>
          <div class="color-item bgColor-green400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">green400</p>
              <p class="uiFnt size-12 wgt-300 white">#34BB93</p>
            </div>
          </div>
          <div class="color-item bgColor-green300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">green300</p>
              <p class="uiFnt size-12 wgt-300 white">#41CAA1</p>
            </div>
          </div>
          <div class="color-item bgColor-green200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">green200</p>
              <p class="uiFnt size-12 wgt-300 white">#67D5B4</p>
            </div>
          </div>
          <div class="color-item bgColor-green100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">green100</p>
              <p class="uiFnt size-12 wgt-300 white">#DCF9F0</p>
            </div>
          </div>
        </div>
        <div class="d-flex color-item-container mt-16" id="yellow">
          <div class="color-item bgColor-yellow500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">yellow500</p>
              <p class="uiFnt size-12 wgt-300 white">#B77B0B</p>
            </div>
          </div>
          <div class="color-item bgColor-yellow400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">yellow400</p>
              <p class="uiFnt size-12 wgt-300 white">#FAA200</p>
            </div>
          </div>
          <div class="color-item bgColor-yellow300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">yellow300</p>
              <p class="uiFnt size-12 wgt-300 white">#FFB01F</p>
            </div>
          </div>
          <div class="color-item bgColor-yellow200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">yellow200</p>
              <p class="uiFnt size-12 wgt-300 white">#FFC252</p>
            </div>
          </div>
          <div class="color-item bgColor-yellow100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">yellow100</p>
              <p class="uiFnt size-12 wgt-300 white">#F9EFDC</p>
            </div>
          </div>
        </div>
        <div class="d-flex color-item-container mt-16" id="purple">
          <div class="color-item bgColor-purple500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">purple500</p>
              <p class="uiFnt size-12 wgt-300 white">#814F92</p>
            </div>
          </div>
          <div class="color-item bgColor-purple400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">purple400</p>
              <p class="uiFnt size-12 wgt-300 white">#9F5FB4</p>
            </div>
          </div>
          <div class="color-item bgColor-purple300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">purple300</p>
              <p class="uiFnt size-12 wgt-300 white">#A970BC</p>
            </div>
          </div>
          <div class="color-item bgColor-purple200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">purple200</p>
              <p class="uiFnt size-12 wgt-300 white">#BE93CD</p>
            </div>
          </div>
          <div class="color-item bgColor-purple100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">purple100</p>
              <p class="uiFnt size-12 wgt-300 white">#F2DCF9</p>
            </div>
          </div>
        </div>
      </div>
      <div id="colors">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt wgt-700">Monochrome</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#monoMarkup">
              <span class="dev-icon">
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3926 1.66658L16.7259 4.99992L13.3926 8.33325" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4.44055 8.33342L1.10722 5.00008L4.44055 1.66675" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.9998 1L6.99976 9" stroke="#78A1F2" stroke-linecap="round"/>
                </svg>
              </span>
              Markup
            </a>
            <!-- markup Trilgger -->
            <!-- markup Content -->
            <div class="modal fade" id="monoMarkup" tabindex="-1" aria-labelledby="monoMarkupLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="monoMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- 기본형태 -->
                      &lt;div class="bgMono-grey200"&gt;
                        &lt;p class="mono-grey300"&gt;크로스타겟&lt;/p&gt;
                      &lt;/div&gt;
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="quaternary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- css Content -->
            <!-- css Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#monoCSS">
              <span class="dev-icon">
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3926 1.66658L16.7259 4.99992L13.3926 8.33325" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4.44055 8.33342L1.10722 5.00008L4.44055 1.66675" stroke="#78A1F2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.9998 1L6.99976 9" stroke="#78A1F2" stroke-linecap="round"/>
                </svg>
              </span>
              SCSS
            </a>
            <!-- css Trilgger -->
            <!-- css Content -->
            <div class="modal fade" id="monoCSS" tabindex="-1" aria-labelledby="monoCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="monoCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      //  >>> monochrome <<<  //

                      // grey
                      $mono-grey800 : #333333;
                      $mono-grey700 : #77777E;
                      $mono-grey600 : #87878E;
                      $mono-grey500 : #C1C1CC;
                      $mono-grey400 : #DADAE6;
                      $mono-grey300 : #E8E8F2;
                      $mono-grey200 : #F1F1F8;
                      $mono-grey100 : #F8F8FB;


                      // white
                      $white : #fff;


                      //  >>> use in code <<<  //

                      // mono

                      .mono {
                        &-800 {
                          color: $mono-grey800;
                        }

                        &-700 {
                          color: $mono-grey700;
                        }

                        &-600 {
                          color: $mono-grey600;
                        }

                        &-500 {
                          color: $mono-grey500;
                        }

                        &-400 {
                          color: $mono-grey400;
                        }

                        &-300 {
                          color: $mono-grey300;
                        }

                        &-200 {
                          color: $mono-grey200;
                        }

                        &-100 {
                          color: $mono-grey100;
                        }
                      }

                      .bgMono {
                        &-800 {
                          background-color: $mono-grey800;
                        }

                        &-700 {
                          background-color: $mono-grey700;
                        }

                        &-600 {
                          background-color: $mono-grey600;
                        }

                        &-500 {
                          background-color: $mono-grey500;
                        }

                        &-400 {
                          background-color: $mono-grey400;
                        }

                        &-300 {
                          background-color: $mono-grey300;
                        }

                        &-200 {
                          background-color: $mono-grey200;
                        }

                        &-100 {
                          background-color: $mono-grey100;
                        }
                      }

                      // white

                      .white {
                        color: $white;
                      }

                      .bgWhite {
                        background-color: $white;
                      }
                    </pre>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="quaternary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- css Content -->
          </div>
        </div>
        <div class="d-flex color-item-container" id="mono">
          <div class="mono-item bgMono-800">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey800</p>
              <p class="uiFnt size-12 wgt-300 white">#333333</p>
            </div>
          </div>
          <div class="mono-item bgMono-700">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey700</p>
              <p class="uiFnt size-12 wgt-300 white">#77777E</p>
            </div>
          </div>
          <div class="mono-item bgMono-600">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey600</p>
              <p class="uiFnt size-12 wgt-300 white">#87878E</p>
            </div>
          </div>
          <div class="mono-item bgMono-500">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey500</p>
              <p class="uiFnt size-12 wgt-300 white">#C1C1CC</p>
            </div>
          </div>
          <div class="mono-item bgMono-400">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey400</p>
              <p class="uiFnt size-12 wgt-300 white">#DADAE6</p>
            </div>
          </div>
          <div class="mono-item bgMono-300">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey300</p>
              <p class="uiFnt size-12 wgt-300 white">#E8E8F2</p>
            </div>
          </div>
          <div class="mono-item bgMono-200">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey200</p>
              <p class="uiFnt size-12 wgt-300 white">#F1F1F8</p>
            </div>
          </div>
          <div class="mono-item bgMono-100">
            <div class="text-area">
              <p class="uiFnt size-12 wgt-500 white mb-4">grey100</p>
              <p class="uiFnt size-12 wgt-300 white">#F8F8FB</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer links start -->
  <?php
    include '../include/footerLinks.php';
  ?>
  <!-- footer links end -->
</body>

</html>