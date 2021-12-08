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
    <div class="typoContent" id="item-1">
      <h2 class="uiFnt wgt-700 txt-32 pt-32">Typography</h2>
      <h3 class="uiFnt wgt-300 mono-600 mt-16"> (Use in UIs)</h3>
      <p class="mt-16 mono-600">
        타이포그라피는 User Interface에 쓰이는 용도와 Table Data에 쓰이는 서체를 구분하여 사용합니다.<br>
        먼저 Interface에 사용하는 서체는 <mark>line-height</mark>를 최소화 하여 <mark>margin</mark>이나 <mark>padding</mark>을 사용함에 있어<br>
        디자인용으로 쉽게 커스터마이징 할 수 있도록 정의되어 있습니다.
      </p>
      <p class="mt-16 mono-600">
        <mark>uiFnt</mark>라는 Class의 하위에 Size와 Weight가 정의되어 있으므로<br>
        반드시 Class에 <mark>uiFnt</mark>를 먼저 작성하고 <mark>size-18</mark>, <mark>wgt-500</mark>등을 추가해 작성합니다.
      </p>
      <div class="dvid-grey100 my-32"></div>
      <div id="typoSizes">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt wgt-700">Font Sizes</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#fontSizeMarkup">
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
            <div class="modal fade" id="fontSizeMarkup" tabindex="-1" aria-labelledby="fontSizeMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="fontSizeMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      &lt;!-- 클레스 빌드 예시 --&gt;
                      &lt;p class="uiFnt size-11 wgt-300"&gt;
                        Cross Target
                      &lt;/p&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      &lt;!-- 태그 예시 --&gt;
                      &lt;h4 class="wgt-400"&gt;
                        Cross Target
                      &lt;/h4&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#fontSizeCSS">
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
            <div class="modal fade" id="fontSizeCSS" tabindex="-1" aria-labelledby="fontSizeCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="fontSizeCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    // style

                    .uiFnt {
                      font-family: "Interop", sans-serif;
                      margin: 0;
                      padding: 0;
                    
                      // size
                    
                      &.size {
                        &-28 {
                          font-size: 28px;
                          line-height: 90%;
                        }
                    
                        &-25 {
                          font-size: 25px;
                          line-height: 90%;
                        }
                    
                        &-18 {
                          font-size: 18px;
                          line-height: 90%;
                        }
                    
                        &-15 {
                          font-size: 15px;
                          line-height: 90%;
                        }
                    
                        &-13 {
                          font-size: 13px;
                          line-height: 90%;
                        }
                    
                        &-12 {
                          font-size: 12px;
                          line-height: 90%;
                        }
                    
                        &-11 {
                          font-size: 11px;
                          line-height: 90%;
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
        <div class="exam-boxes">
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">28px</div>
              <p class="uiFnt size-28 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-28</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h1</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">25px</div>
              <p class="uiFnt size-25 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-25</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h2</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">18px</div>
              <p class="uiFnt size-18 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-18</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h3</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">15px</div>
              <p class="uiFnt size-15 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h4</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">13px</div>
              <p class="uiFnt size-13 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-13</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h5</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">12px</div>
              <p class="uiFnt size-12 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-12</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h6</span>
            </div>
          </div>          
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">11px</div>
              <p class="uiFnt size-11 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-11</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h7</span>
            </div>
          </div>
        </div>
      </div>
      <div id="typoWeights">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt size-15 wgt-700">Font Weights</h4>
          <div class="d-flex align-items-center">
              <!-- markup Trilgger -->
              <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#fontWeightMarkup">
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
              <div class="modal fade" id="fontWeightMarkup" tabindex="-1" aria-labelledby="fontWeightMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="fontWeightMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <pre class="brush:html ; toolbar:false">
                        &lt;!-- 클레스 빌드 예시 --&gt;
                        &lt;p class="uiFnt size-15 wgt-500"&gt;
                          Cross Target
                        &lt;/p&gt;
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
              <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#fontWeightCSS">
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
              <div class="modal fade" id="fontWeightCSS" tabindex="-1" aria-labelledby="fontWeightCSSLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="fontWeightCSSLabel">SCSS Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <pre class="brush:sass ; toolbar:false">
                      // style
                      
                      .uiFnt {
                        font-family: "Interop", sans-serif;
                        margin: 0;
                        padding: 0;
                      
                        // weights
                      
                        &.wgt {
                          &-700 {
                            font-weight: 700;
                          }
                      
                          &-600 {
                            font-weight: 600;
                          }
                      
                          &-500 {
                            font-weight: 500;
                          }
                      
                          &-400 {
                            font-weight: 400;
                          }
                      
                          &-300 {
                            font-weight: 300;
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
        <div class="exam-boxes">
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">700</div>
              <p class="uiFnt size-15 wgt-700 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-700</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">600</div>
              <p class="uiFnt size-15 wgt-600 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-600</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">500</div>
              <p class="uiFnt size-15 wgt-500 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-500</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">400</div>
              <p class="uiFnt size-15 wgt-400 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-400</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">300</div>
              <p class="uiFnt size-15 wgt-300 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-300</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tblTypoContent" id="item-2">
      <h2 class="uiFnt wgt-700 txt-32 pt-64">Typography</h2>
      <h3 class="uiFnt wgt-300 mono-600 mt-16"> (Use in Tables)</h3>
      <p class="mt-16 mono-600">
        Table Data용으로 쓰이는 Typography는 두가지 서체를 조합하여 정의 되어 있습니다.<br>
        국/영문은 Interop, 숫자는 Monospace를 가진 Source Sans Pro입니다.<br>
      </p>
      <p class="mt-16 mono-600">
        <mark>tblFnt</mark>라는 Class의 하위에 <mark>num</mark>과 <mark>txt</mark>가 정의되어 있고 각각 Size와 Weight를 가지고 있으므로<br>
        반드시 Class에 <mark>tblFnt</mark>와 <mark>num</mark>또는 <mark>txt</mark>를 먼저 작성하고 <mark>size-12</mark>, <mark>wgt-400</mark>등을 추가해 작성합니다.
      </p>
      <div class="dvid-grey100 my-32"></div>
      <div id="tblTypoSizes">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt wgt-700">Font Sizes</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#tblFontSizeMarkup">
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
            <div class="modal fade" id="tblFontSizeMarkup" tabindex="-1" aria-labelledby="tblFontSizeMarkupLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="tblFontSizeMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- 기본형태 -->
                      &lt;span class="tblFnt num size-12"&gt;123,456,789&lt;/span&gt;
                      &lt;span class="tblFnt txt size-12"&gt;원&lt;/span&gt;
                      <!-- 혼용시 -->
                      &lt;span class="tblFnt num size-12"&gt;123,456,789&lt;span class="txt size-12"&gt;원&lt;/span&gt;&lt;/span&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#tblFontSizeCSS">
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
            <div class="modal fade" id="tblFontSizeCSS" tabindex="-1" aria-labelledby="tblFontSizeCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="tblFontSizeCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      .tblFnt {
                        margin: 0;
                        padding: 0;
                      
                        &.num {
                          &.size {
                            &-11 {
                              font-family: "Source Sans Pro", sans-serif;
                              font-size: 12px;
                              line-height: 90%;
                            }
                      
                            &-12 {
                              font-family: "Source Sans Pro", sans-serif;
                              font-size: 14px;
                              line-height: 90%;
                            }
                          }
                        }
                      
                        &.txt {
                          &.size {
                            &-11 {
                              font-family: "Interop", sans-serif;
                              font-size: 11px;
                              line-height: 95%;
                            }
                      
                            &-12 {
                              font-family: "Interop", sans-serif;
                              font-size: 12px;
                              line-height: 95%;
                            }
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
        <div class="exam-boxes">
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-16 smallTag">12px, Number</div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-12 mb-8">123,456,789</p>
                <p class="tblFnt num size-12 mb-8">87,659</p>
                <p class="tblFnt num size-12 mb-8">445,487,659</p>
                <p class="tblFnt num size-12 mb-8">8,213,789</p>
              </div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-12 mb-8">445,487,659</p>
                <p class="tblFnt num size-12 mb-8">87,659</p>
                <p class="tblFnt num size-12 mb-8">8,213,789</p>
                <p class="tblFnt num size-12 mb-8">123,456,789</p>
              </div>
              <div class="table-exam">
                <p class="tblFnt num size-12 mb-8">123,456,789</p>
                <p class="tblFnt num size-12 mb-8">445,487,659</p>
                <p class="tblFnt num size-12 mb-8">87,659</p>
                <p class="tblFnt num size-12 mb-8">8,213,789</p>
              </div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.size-12</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-16 smallTag">11px, Number</div>
              <div class="table-exam me-32">
                <p class="tblFnt num size-11 mb-4">113,456,789</p>
                <p class="tblFnt num size-11 mb-4">87,659</p>
                <p class="tblFnt num size-11 mb-4">445,487,659</p>
                <p class="tblFnt num size-11 mb-4">8,213,789</p>
              </div>
              <div class="table-exam me-32">
                <p class="tblFnt num size-11 mb-4">445,487,659</p>
                <p class="tblFnt num size-11 mb-4">87,659</p>
                <p class="tblFnt num size-11 mb-4">8,213,789</p>
                <p class="tblFnt num size-11 mb-4">113,456,789</p>
              </div>
              <div class="table-exam">
                <p class="tblFnt num size-11 mb-4">113,456,789</p>
                <p class="tblFnt num size-11 mb-4">445,487,659</p>
                <p class="tblFnt num size-11 mb-4">87,659</p>
                <p class="tblFnt num size-11 mb-4">8,213,789</p>
              </div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.size-11</span>
            </div>
          </div>
          <div class="dvid-grey200 mb-24"></div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-16 smallTag">12px, Text</div>
              <p class="tblFnt txt size-12">원, 단위 등</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.size-12</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-16 smallTag">11px, Text</div>
              <p class="tblFnt txt size-11">원, 단위 등</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.size-11</span>
            </div>
          </div>
        </div>
      </div>
      <div id="tbltypoWeights">
        <div class="category mt-32 mb-16">
          <h4 class="uiFnt wgt-700">Font Weights</h4>
          <div class="d-flex align-items-center">
              <!-- markup Trilgger -->
              <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#tblFontWeightMarkup">
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
              <div class="modal fade" id="tblFontWeightMarkup" tabindex="-1" aria-labelledby="tblFontWeightMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="tblFontWeightMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <pre class="brush:html ; toolbar:false">
                        &lt;!-- 클레스 빌드 예시 --&gt;
                        &lt;p class="tblFnt wgt-600"&gt;
                          Cross Target
                        &lt;/p&gt;
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
              <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#tblFontWeightCSS">
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
              <div class="modal fade" id="tblFontWeightCSS" tabindex="-1" aria-labelledby="tblFontWeightCSSLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="tblFontWeightCSSLabel">SCSS Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <pre class="brush:sass ; toolbar:false">

                        // style

                        .tblFnt {
                          margin: 0;
                          padding: 0;
                        
                          &.num {
                        
                            &.wgt {
                              &-400 {
                                font-weight: 400;
                              }
                        
                              &-600 {
                                font-weight: 600;
                              }
                            }
                          }
                        
                          &.txt {
                        
                            &.wgt {
                              &-400 {
                                font-weight: normal;
                              }
                        
                              &-600 {
                                font-weight: 600;
                              }
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
        <div class="exam-boxes">
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">600</div>
              <p class="tblFnt txt size-12 wgt-600"><span class="tblFnt num size-12 wgt-600">12,345</span> 데이터 테이블 서체</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.wgt-600</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.wgt-600</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-8 smallTag">400</div>
              <p class="tblFnt txt size-12 wgt-400"><span class="tblFnt num size-12 wgt-400">12,345</span> 데이터 테이블 서체</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.wgt-400</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.wgt-400</span>
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
</html>