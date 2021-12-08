<!DOCTYPE html>
<html lang="en">
  <!-- header include start -->
  <?php
    include '../include/header.php';
  ?>
  <!-- header include end -->
    <div class="docsMainContent" data-bs-target="#docContents">
    <div class="typoContent py-64" id="item-1">
      <div class="d-flex align-items-start">
        <h2 class="uiFnt wgt-700 txt-32 me-8">Typography</h2>
        <h5 class="subTitleBox uiFnt wgt-600 white"> Use in UIs</h5>
      </div>
      <p class="mt-16 mono-600">
        타이포그라피는 User Interface에 쓰이는 용도와 Table Data에 쓰이는 서체를 구분하여 사용합니다.<br>
        먼저 Interface에 사용하는 서체는 <mark>line-height</mark>를 최소화 하여 <mark>margin</mark>이나 <mark>padding</mark>을 사용함에 있어<br>
        디자인용으로 쉽게 커스터마이징 할 수 있도록 정의되어 있습니다.
      </p>
      <p class="mt-16 mono-600">
        <mark>uiFnt</mark>라는 Class의 하위에 Size와 Weight가 정의되어 있으므로<br>
        반드시 Class에 <mark>uiFnt</mark>를 먼저 작성하고 <mark>size-18</mark>, <mark>wgt-500</mark>등을 추가해 작성합니다.
      </p>
      <div id="typoSizes">
        <div class="category mt-40 mb-16">
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
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">28px</div>
              </div>
              <p class="uiFnt size-28 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-28</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h1</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">25px</div>
              </div>
              <p class="uiFnt size-25 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-25</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h2</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">18px</div>
              </div>
              <p class="uiFnt size-18 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-18</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h3</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">15px</div>
              </div>
              <p class="uiFnt size-15 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h4</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">13px</div>
              </div>
              <p class="uiFnt size-13 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-13</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h5</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">12px</div>
              </div>
              <p class="uiFnt size-12 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-12</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">h6</span>
            </div>
          </div>          
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">11px</div>
              </div>
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
        <div class="category mt-40 mb-16">
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
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">700</div>
              </div>
              <p class="uiFnt size-15 wgt-700 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-700</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">600</div>
              </div>
              <p class="uiFnt size-15 wgt-600 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-600</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">500</div>
              </div>
              <p class="uiFnt size-15 wgt-500 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-500</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">400</div>
              </div>
              <p class="uiFnt size-15 wgt-400 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-400</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">300</div>
              </div>
              <p class="uiFnt size-15 wgt-300 d-flex align-items-center">Cross Target, 크로스타겟</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.uiFnt.size-15.wgt-300</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="grey300">
    <div class="tblTypoContent py-64" id="item-1-2">
      <div class="d-flex align-items-start mb-32">
        <h2 class="uiFnt wgt-700 txt-32 me-8">Typography</h2>
        <h5 class="subTitleBox uiFnt wgt-600 white"> Use in Tables</h5>
      </div>
      <p class="mt-16 mono-600">
        Table Data용으로 쓰이는 Typography는 두가지 서체를 조합하여 정의 되어 있습니다.<br>
        국/영문은 Interop, 숫자는 Monospace를 가진 Source Sans Pro입니다.<br>
      </p>
      <p class="mt-16 mono-600">
        <mark>tblFnt</mark>라는 Class의 하위에 <mark>num</mark>과 <mark>txt</mark>가 정의되어 있고 각각 Size와 Weight를 가지고 있으므로<br>
        반드시 Class에 <mark>tblFnt</mark>와 <mark>num</mark>또는 <mark>txt</mark>를 먼저 작성하고 <mark>size-12</mark>, <mark>wgt-400</mark>등을 추가해 작성합니다.
      </p>
      <div id="tblTypoSizes">
        <div class="category mt-40 mb-16">
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
                    </pre>
                    <pre class="brush:html ; toolbar:false">
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
              <div class="fix-width-100">
                <div class="uiFnt size-11 wgt-500 smallTag">12px, Number</div>
              </div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-12 mb-8 wgt-400">123,456,789</p>
                <p class="tblFnt num size-12 mb-8 wgt-400">87,659</p>
              </div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-12 mb-8 wgt-400">445,487,659</p>
                <p class="tblFnt num size-12 mb-8 wgt-400">87,659</p>
              </div>
              <div class="table-exam">
                <p class="tblFnt num size-12 mb-8 wgt-400">123,456,789</p>
                <p class="tblFnt num size-12 mb-8 wgt-400">445,487,659</p>
              </div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.size-12</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-100">
                <div class="uiFnt size-11 wgt-500 smallTag">11px, Number</div>
              </div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-11 mb-4 wgt-400">113,456,789</p>
                <p class="tblFnt num size-11 mb-4 wgt-400">87,659</p>
              </div>
              <div class="table-exam me-24">
                <p class="tblFnt num size-11 mb-4 wgt-400">445,487,659</p>
                <p class="tblFnt num size-11 mb-4 wgt-400">87,659</p>
              </div>
              <div class="table-exam">
                <p class="tblFnt num size-11 mb-4 wgt-400">113,456,789</p>
                <p class="tblFnt num size-11 mb-4 wgt-400">445,487,659</p>
              </div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.size-11</span>
            </div>
          </div>
          <div class="dvid-grey200 mb-24"></div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-100">
                <div class="uiFnt size-11 wgt-500 smallTag">12px, Text</div>
              </div>
              <p class="tblFnt txt size-12 wgt-400">원, 단위 등</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.size-12</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-100">
                <div class="uiFnt size-11 wgt-500 smallTag">11px, Text</div>
              </div>
              <p class="tblFnt txt size-11 wgt-400">원, 단위 등</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.size-11</span>
            </div>
          </div>
        </div>
      </div>
      <div id="tbltypoWeights">
        <div class="category mt-40 mb-16">
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
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">600</div>
              </div>
              <p class="tblFnt txt size-12 wgt-600"><span class="tblFnt num size-12 wgt-600">12,345</span> 데이터 테이블 서체</p>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.num</span>.wgt-600</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.tblFnt<span class="uiFnt size-13 wgt-700">.txt</span>.wgt-600</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="fix-width-50">
                <div class="uiFnt size-11 wgt-500 smallTag">400</div>
              </div>
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
    <hr class="grey300">
    <div class="colorContent py-64" id="item-3">
      <h2 class="uiFnt wgt-700 txt-32">Colors</h2>
      <p class="mt-32 mono-600">
        크로스타겟을 이루고 있는 다섯가지의 컬러와 해당 컬러마다 5단계의 컨트라스트를 가지며 <mark>color-100(~500)</mark>으로 정의 되어있습니다.<br>
        모노크롬은 크로스타겟의 검정~회색에 해당합니다. 총 8단계의 컨트라스트를 가지고 있으며 모노크롬은 <mark>mono-100(~800)</mark>으로 정의되어있습니다.
      </p>
      <p class="mt-16 mono-600">
        플랫폼 내부의 배경과 객체 컬러에도 사용이 가능하도록 클레스명으로 자유로이 작성 할 수 있으며<br>
        배경적용에는 <mark>.bgColor-blue100</mark>, <mark>.bgMono-100</mark>, 객체컬러 적용에는 <mark>.color-blue100</mark>, <mark>.mono-100</mark> 등과 같이 사용할 수 있습니다
      </p>
      <div id="colors">
        <div class="category mt-40 mb-16">
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
                      &lt;div class="bgColor-blue200"&gt;
                        &lt;p class="color-blue300 uiFnt size-13 wgt-500"&gt;크로스타겟&lt;/p&gt;
                      &lt;/div&gt;

                      &lt;div class="bgColor-red500"&gt;
                        &lt;p class="color-red100 uiFnt size-13 wgt-500"&gt;크로스타겟&lt;/p&gt;
                      &lt;/div&gt;

                      &lt;div class="bgColor-yellow200"&gt;
                        &lt;p class="color-green300 uiFnt size-13 wgt-500"&gt;크로스타겟&lt;/p&gt;
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
        <div class="category mt-40 mb-16">
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
                      $mono-grey100 : #F7F9FC;


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
              <p class="uiFnt size-12 wgt-300 white">#F7F9FC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="grey300">
    <div class="btnContent py-64" id="item-4">
      <h2 class="uiFnt wgt-700 txt-32">Buttons</h2>
      <p class="mt-32 mono-600">
        네가지의 컬러를 가진 버튼과 Disabled 값을 가지는 버튼까지 총 다섯가지의 버튼스타일이 정의 되어있으며<br>
        각 버튼마다 <mark>:hover</mark>, <mark>:active</mark>, <mark>:disabled</mark>상태를 가집니다.<br><br>
        Normal 크기를 기준으로 서체크기 13px, 객체 높이는 30px이며 아이콘 박스의 크기는 14px X 14px입니다.<br>
        Small 크기를 기준으로 서체크기 11px, 객체 높이가 22px이며 아이콘 박스의 크기는 12px X 12px입니다.
      </p>
      <div id="txtButtons">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Text Button</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#btnTxtMarkup">
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
            <div class="modal fade" id="btnTxtMarkup" tabindex="-1" aria-labelledby="btnTxtMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnTxtMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal size -->
                      &lt;button class="primary"&gt;샘플버튼&lt;/button&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- small size -->
                      &lt;button class="primary small"&gt;샘플버튼&lt;/button&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#btnTxtCSS">
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
            <div class="modal fade" id="btnTxtCSS" tabindex="-1" aria-labelledby="btnTxtCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnTxtCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      button {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 30px;
                        border-width: 0px;
                        border-style: none;
                        border-image: none;
                        border-radius: 4px;
                        padding: 8px 12px !important;
                        transition: all 0.1s ease-in-out;
                        font-size: 13px;
                        font-weight: 500;
                        line-height: 95%;
                        <!-- 아이콘과의 간격 -->
                        gap: 4px; 
                      
                        &.small {
                          padding: 6px 8px !important;
                          height: 22px;
                          font-size: 11px;
                        }
                      
                        &.primary {
                          background-color: $color-blue300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-blue400;
                          }
                      
                          &:active {
                            background-color: $color-blue500;
                          }
                        }
                      
                        &.secondary {
                          background-color: $color-green300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-green400;
                          }
                      
                          &:active {
                            background-color: $color-green500;
                          }
                        }
                      
                        &.tertiary {
                          background-color: $color-yellow300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-yellow400;
                          }
                      
                          &:active {
                            background-color: $color-yellow500;
                          }
                        }
                      
                        &.quaternary {
                          background-color: $mono-grey200;
                          color: $mono-grey600;
                      
                          &:hover {
                            background-color: $mono-grey300;
                          }
                      
                          &:active {
                            background-color: $mono-grey400;
                          }
                        }
                      
                        &.disabled {
                          background-color: $mono-grey300;
                          color: $mono-grey500;
                          cursor: not-allowed;
                      
                          &:active {
                            background-color: $mono-grey400;
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
        <div class="exam-boxes d-none">
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Tertiary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Quaternary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <button class="primary">Button</button>
            </div>
            <div class="btnItem">
              <button class="secondary">Button</button>
            </div>
            <div class="btnItem">
              <button class="tertiary">Button</button>
            </div>
            <div class="btnItem">
              <button class="quaternary">Button</button>
            </div>
            <div class="btnItem">
              <button class="disabled">Button</button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
            </div>
          </div>
          <div class="group code small d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Small</p>
            </div>
            <div class="btnItem">
              <button class="primary small">Button</button>
            </div>
            <div class="btnItem">
              <button class="secondary small">Button</button>
            </div>
            <div class="btnItem">
              <button class="tertiary small">Button</button>
            </div>
            <div class="btnItem">
              <button class="quaternary small">Button</button>
            </div>
            <div class="btnItem">
              <button class="disabled small">Button</button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary.small</span>
            </div>
          </div>
        </div>
        <div class="exam-boxes">
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Tertiary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Quaternary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <button class="primary">버튼</button>
            </div>
            <div class="btnItem">
              <button class="secondary">버튼</button>
            </div>
            <div class="btnItem">
              <button class="tertiary">버튼</button>
            </div>
            <div class="btnItem">
              <button class="quaternary">버튼</button>
            </div>
            <div class="btnItem">
              <button class="primary" disabled>버튼</button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
            </div>
          </div>
          <div class="group code small d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Small</p>
            </div>
            <div class="btnItem">
              <button class="primary small">버튼</button>
            </div>
            <div class="btnItem">
              <button class="secondary small">버튼</button>
            </div>
            <div class="btnItem">
              <button class="tertiary small">버튼</button>
            </div>
            <div class="btnItem">
              <button class="quaternary small">버튼</button>
            </div>
            <div class="btnItem">
              <button class="primary small" disabled>버튼</button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary.small</span>
            </div>
          </div>
        </div>
      </div>
      <div id="iconButtons">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Icon Button</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#btnIconMarkup">
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
            <div class="modal fade" id="btnIconMarkup" tabindex="-1" aria-labelledby="btnIconMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnIconMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal size -->
                      &lt;button class="primary"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M10.5 10.5L7.5 7.5M8.5 5C8.5 6.933 6.933 8.5 5 8.5C3.067 8.5 1.5 6.933 1.5 5C1.5 3.067 3.067 1.5 5 1.5C6.933 1.5 8.5 3.067 8.5 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                      &lt;/button&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- small size -->
                      &lt;button class="primary small"&gt;
                        &lt;svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M12.25 12.25L8.75 8.75M9.91667 5.83333C9.91667 8.0885 8.0885 9.91667 5.83333 9.91667C3.57817 9.91667 1.75 8.0885 1.75 5.83333C1.75 3.57817 3.57817 1.75 5.83333 1.75C8.0885 1.75 9.91667 3.57817 9.91667 5.83333Z" stroke="#C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                      &lt;/button&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#btnTxtCSS">
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
            <div class="modal fade" id="btnTxtCSS" tabindex="-1" aria-labelledby="btnTxtCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnTxtCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      button {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 30px;
                        border-width: 0px;
                        border-style: none;
                        border-image: none;
                        border-radius: 4px;
                        padding: 8px 12px !important;
                        transition: all 0.1s ease-in-out;
                        font-size: 13px;
                        font-weight: 500;
                        line-height: 95%;
                        <!-- 아이콘과의 간격 -->
                        gap: 4px; 
                      
                        &.small {
                          padding: 6px 8px !important;
                          height: 22px;
                          font-size: 11px;
                        }
                      
                        &.primary {
                          background-color: $color-blue300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-blue400;
                          }
                      
                          &:active {
                            background-color: $color-blue500;
                          }
                        }
                      
                        &.secondary {
                          background-color: $color-green300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-green400;
                          }
                      
                          &:active {
                            background-color: $color-green500;
                          }
                        }
                      
                        &.tertiary {
                          background-color: $color-yellow300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-yellow400;
                          }
                      
                          &:active {
                            background-color: $color-yellow500;
                          }
                        }
                      
                        &.quaternary {
                          background-color: $mono-grey200;
                          color: $mono-grey600;
                      
                          &:hover {
                            background-color: $mono-grey300;
                          }
                      
                          &:active {
                            background-color: $mono-grey400;
                          }
                        }
                      
                        &.disabled {
                          background-color: $mono-grey300;
                          color: $mono-grey500;
                          cursor: not-allowed;
                      
                          &:active {
                            background-color: $mono-grey400;
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
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Tertiary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Quaternary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <button class="primary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="secondary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="tertiary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="quaternary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#87878E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="primary" disabled>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#C1C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Small</p>
            </div>
            <div class="btnItem">
              <button class="primary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>          
              </button>
            </div>
            <div class="btnItem">
              <button class="secondary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="tertiary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="quaternary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#87878E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem">
              <button class="primary small" disabled>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#C1C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary.small</span>
            </div>
          </div>
        </div>
      </div>
      <div id="combinationBtn">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Combination</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#btnCombinationMarkup">
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
            <div class="modal fade" id="btnCombinationMarkup" tabindex="-1" aria-labelledby="btnCombinationMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnCombinationMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal size -->
                      &lt;button class="primary"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M10.5 10.5L7.5 7.5M8.5 5C8.5 6.933 6.933 8.5 5 8.5C3.067 8.5 1.5 6.933 1.5 5C1.5 3.067 3.067 1.5 5 1.5C6.933 1.5 8.5 3.067 8.5 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        버튼
                      &lt;/button&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- small size -->
                      &lt;button class="primary small"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M10.5 10.5L7.5 7.5M8.5 5C8.5 6.933 6.933 8.5 5 8.5C3.067 8.5 1.5 6.933 1.5 5C1.5 3.067 3.067 1.5 5 1.5C6.933 1.5 8.5 3.067 8.5 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        버튼
                      &lt;/button&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#btnTxtCSS">
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
            <div class="modal fade" id="btnTxtCSS" tabindex="-1" aria-labelledby="btnTxtCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="btnTxtCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      button {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 30px;
                        border-width: 0px;
                        border-style: none;
                        border-image: none;
                        border-radius: 4px;
                        padding: 8px 12px !important;
                        transition: all 0.1s ease-in-out;
                        font-size: 13px;
                        font-weight: 500;
                        line-height: 95%;
                        <!-- 아이콘과의 간격 -->
                        gap: 4px; 
                      
                        &.small {
                          padding: 6px 8px !important;
                          height: 22px;
                          font-size: 11px;
                        }
                      
                        &.primary {
                          background-color: $color-blue300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-blue400;
                          }
                      
                          &:active {
                            background-color: $color-blue500;
                          }
                        }
                      
                        &.secondary {
                          background-color: $color-green300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-green400;
                          }
                      
                          &:active {
                            background-color: $color-green500;
                          }
                        }
                      
                        &.tertiary {
                          background-color: $color-yellow300;
                          color: $white;
                      
                          &:hover {
                            background-color: $color-yellow400;
                          }
                      
                          &:active {
                            background-color: $color-yellow500;
                          }
                        }
                      
                        &.quaternary {
                          background-color: $mono-grey200;
                          color: $mono-grey600;
                      
                          &:hover {
                            background-color: $mono-grey300;
                          }
                      
                          &:active {
                            background-color: $mono-grey400;
                          }
                        }
                      
                        &.disabled {
                          background-color: $mono-grey300;
                          color: $mono-grey500;
                          cursor: not-allowed;
                      
                          &:active {
                            background-color: $mono-grey400;
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
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Tertiary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Quaternary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <button class="primary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
                </button>
            </div>
            <div class="btnItem">
              <button class="secondary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="tertiary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="quaternary">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#87878E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="primary" disabled>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#c1c1cc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Small</p>
            </div>
            <div class="btnItem">
              <button class="primary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼                   
              </button>
            </div>
            <div class="btnItem">
              <button class="secondary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="tertiary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="quaternary small">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#87878E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem">
              <button class="primary small" disabled>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#c1c1cc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                버튼
              </button>
            </div>
            <div class="btnItem ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary.small</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="grey300">
    <div class="radioCheckContent py-64" id="item-5">
      <h2 class="uiFnt wgt-700 txt-32">Checks & Radios</h2>
      <p class="mt-32 mono-600">
        체크박스와 라디오박스는 백그라운드에 색상이 채워지지 않은 <mark>primary</mark>와 색상이 채워진 <mark>secondary</mark> 형태의 두가지 스타일이 있습니다.<br>
        <mark>checkBox</mark>와 <mark>radioBox</mark> 클레스 하위에 input 속성으로 <mark>type="checkbox"</mark>와 <mark>type="radio"</mark>로 작성하고 구분하여 사용할 수 있습니다.<br>
        크로스타겟 플랫폼내에서 가장 많이 사용되는 서체 크기인 13px의 크기와 페어링 할 수 있도록 설계되었습니다.
      </p>
      <div id="checkBox">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Check Box</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#checkBoxMarkup">
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
            <div class="modal fade" id="checkBoxMarkup" tabindex="-1" aria-labelledby="checkBoxMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal state -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId1"&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- checked disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" checked disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#checkBoxCSS">
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
            <div class="modal fade" id="checkBoxCSS" tabindex="-1" aria-labelledby="checkBoxCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    .checkBox {
                      display: flex;
                      align-items: center;

                      label {
                        line-height: 110% !important;
                      }

                      input[type="checkbox"].primary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border-color: $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%234A81EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $white;
                          border-color: $mono-grey500;

                          &:hover {
                            background-color: $white;
                            border-color: $mono-grey400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
                          }
                        }
                      }

                      input[type="checkbox"].secondary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border: 1px solid $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $color-blue300;
                          border-color: $color-blue300;

                          &:hover {
                            background-color: $color-blue400;
                            border-color: $color-blue400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;
                            border-color: $mono-grey500;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;
                          border-color: $mono-grey500;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
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
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId1">
                <label class="uiFnt size-13" for="sampleId1">체크</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId2">
                <label class="uiFnt size-13" for="sampleId2">체크</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId3" disabled>
                <label class="uiFnt size-13" for="sampleId3">체크</label>
              </div>
            </div>
            <div class="btnItem flex-row ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">disabled</span>
            </div>
          </div>
          <div class="group code small d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Checked</p>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId4" checked>
                <label class="uiFnt size-13" for="sampleId4">체크</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId5" checked>
                <label class="uiFnt size-13" for="sampleId5">체크</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="checkBox">
                <input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId6" checked disabled>
                <label class="uiFnt size-13" for="sampleId6">체크</label>
              </div>
            </div>
            <div class="btnItem flex-row ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">checked</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">disabled</span>
            </div>
          </div>
        </div>
      </div>
      <div id="radioBox">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Radio Box</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#radioBoxMarkup">
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
            <div class="modal fade" id="radioBoxMarkup" tabindex="-1" aria-labelledby="radioBoxMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="radioBoxMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal state -->
                      &lt;div class="radioBox"&gt;
                        &lt;input class="primary me-8" type="radio" value="sampleValue" id="sampleId1" name="sampleRadio1"&gt;
                        &lt;label&gt; class="uiFnt size-13" for="sampleId1"&gt;라디오&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- disabled -->
                      &lt;div class="radioBox"&gt;
                        &lt;input class="primary me-8" type="radio" value="sampleValue" id="sampleId1" name="sampleRadio1 disabled"&gt;
                        &lt;label&gt; class="uiFnt size-13" for="sampleId1"&gt;라디오&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- checked disabled -->
                      &lt;div class="radioBox"&gt;
                        &lt;input class="primary me-8" type="radio" value="sampleValue" id="sampleId1" name="sampleRadio1 checked disabled"&gt;
                        &lt;label&gt; class="uiFnt size-13" for="sampleId1"&gt;라디오&lt;/label&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#radioBoxCSS">
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
            <div class="modal fade" id="radioBoxCSS" tabindex="-1" aria-labelledby="radioBoxCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="radioBoxCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    .radioBox {
                      display: flex;
                      align-items: center;

                      label {
                        line-height: 110% !important;
                      }

                      input[type="radio"].primary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 10px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border-color: $mono-grey400;
                        }

                        &:checked {
                          content: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='7' cy='7' r='3' fill='%234A81EE'/%3E%3C/svg%3E");
                          background-color: $white;
                          border-color: $mono-grey500;

                          &:hover {
                            background-color: $white;
                            border-color: $mono-grey400;
                          }

                          &:disabled {
                            content: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='7' cy='7' r='3' fill='%23C1C1CC'/%3E%3C/svg%3E");
                            background-color: $mono-grey300;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
                          }
                        }
                      }

                      input[type="radio"].secondary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 10px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border: 1px solid $mono-grey400;
                        }

                        &:checked {
                          content: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='7' cy='7' r='3' fill='white'/%3E%3C/svg%3E");
                          background-color: $color-blue300;
                          border-color: $color-blue300;

                          &:hover {
                            background-color: $color-blue400;
                            border-color: $color-blue400;
                          }

                          &:disabled {
                            content: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='7' cy='7' r='3' fill='%23C1C1CC'/%3E%3C/svg%3E");
                            background-color: $mono-grey300;
                            border-color: $mono-grey500;

                            &:hover {
                              background-color: $mono-grey300;
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;
                          border-color: $mono-grey500;

                          &:hover {
                            background-color: $mono-grey300;
                            border-color: $mono-grey500;
                            cursor: not-allowed;
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
          <div class="group first d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-11 wgt-400 mono-800 text-center" style="visibility: hidden;">Normal</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Primary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Secondary</p>
            </div>
            <div class="btnItem">
              <p class="uiFnt size-12 wgt-400 mono-600 text-center">Disabled</p>
            </div>
          </div>
          <div class="group code d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Normal</p>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="primary me-8" type="radio" value="sampleValue" id="sampleId7" name="sampleRadio1">
                <label class="uiFnt size-13" for="sampleId7">라디오</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="secondary me-8" type="radio" value="sampleValue" id="sampleId8" name="sampleRadio2">
                <label class="uiFnt size-13" for="sampleId8">라디오</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="primary me-8" type="radio" value="sampleValue" id="sampleId9" name="sampleRadio3" disabled>
                <label class="uiFnt size-13" for="sampleId9">라디오</label>
              </div>
            </div>
            <div class="btnItem flex-row ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">disabled</span>
            </div>
          </div>
          <div class="group code small d-flex">
            <div class="btnItem justify-content-center">
              <p class="uiFnt size-12 wgt-400 mono-600">Checked</p>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="primary me-8" type="radio" value="sampleValue" id="sampleId10" name="sampleRadio1" checked>
                <label class="uiFnt size-13" for="sampleId10">라디오</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="secondary me-8" type="radio" value="sampleValue" id="sampleId11" name="sampleRadio2" checked>
                <label class="uiFnt size-13" for="sampleId11">라디오</label>
              </div>
            </div>
            <div class="btnItem">
              <div class="radioBox">
                <input class="primary me-8" type="radio" value="sampleValue" id="sampleId12" name="sampleRadio3" checked disabled>
                <label class="uiFnt size-13" for="sampleId12">라디오</label>
              </div>
            </div>
            <div class="btnItem flex-row ms-auto">
              <span class="uiFnt size-13 wgt-400 smallTag-code">.primary</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">checked</span>
              <span class="uiFnt size-13 wgt-400 smallTag-etc">disabled</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="grey300">
    <div class="utilContent py-64" id="item-6">
      <h2 class="uiFnt wgt-700 txt-32">Utilities</h2>
      <p class="mt-32 mono-600">
        <mark>divider</mark>와 <mark>margin</mark>, <mark>padding</mark> 등을 크로스타겟의 디자인 시스템에 사용하기 편리하도록 정의가 되어있습니다.<br>
      </p>
      <div id="divider">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Divider</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#deviderMarkup">
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
            <div class="modal fade" id="deviderMarkup" tabindex="-1" aria-labelledby="deviderMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="deviderMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      &lt;hr class="grey-500"&gt;
                      &lt;hr class="grey-400"&gt;
                      &lt;hr class="grey-300"&gt;
                      &lt;hr class="grey-200"&gt;
                      &lt;hr class="grey-100"&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#dividerCSS">
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
            <div class="modal fade" id="dividerCSS" tabindex="-1" aria-labelledby="dividerCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="dividerCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    hr {
                      margin: 0;
                      border: 0;
                      opacity: 1;
                      height: 1px;

                      &:not([size]) {
                        height: 1px;
                      }

                      &.grey100 {
                        background-color: $mono-grey100;
                      }

                      &.grey200 {
                        background-color: $mono-grey200;
                      }

                      &.grey300 {
                        background-color: $mono-grey300;
                      }

                      &.grey400 {
                        background-color: $mono-grey400;
                      }

                      &.grey500 {
                        background-color: $mono-grey500;
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
        <div class="exam-boxes ol">
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-32 smallTag">500</div>
              <hr class="grey500" style="width: 500px">
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.grey-500</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">hr</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-32 smallTag">400</div>
              <hr class="grey400" style="width: 500px">
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.grey-400</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">hr</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-32 smallTag">300</div>
              <hr class="grey300" style="width: 500px">
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.grey-300</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">hr</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-32 smallTag">200</div>
              <hr class="grey200" style="width: 500px">
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.grey-200</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">hr</span>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="uiFnt size-11 wgt-500 me-32 smallTag">100</div>
              <hr class="grey100" style="width: 500px">
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.grey-100</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-tag">hr</span>
            </div>
          </div>
        </div>
      </div>
      <div id="margin">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Margins</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#marginsMarkup">
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
            <div class="modal fade" id="marginsMarkup" tabindex="-1" aria-labelledby="marginsMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="marginsMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin top -->
                      &lt;div class="mt-0"&gt;
                      &lt;div class="mt-4"&gt;
                      &lt;div class="mt-8"&gt;
                      &lt;div class="mt-16"&gt;
                      &lt;div class="mt-24"&gt;
                      &lt;div class="mt-32"&gt;
                      &lt;div class="mt-40"&gt;
                      &lt;div class="mt-64"&gt;
                      &lt;div class="mt-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin end(right) -->
                      &lt;div class="me-0"&gt;
                      &lt;div class="me-4"&gt;
                      &lt;div class="me-8"&gt;
                      &lt;div class="me-16"&gt;
                      &lt;div class="me-24"&gt;
                      &lt;div class="me-32"&gt;
                      &lt;div class="me-40"&gt;
                      &lt;div class="me-64"&gt;
                      &lt;div class="me-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin bottom -->
                      &lt;div class="mb-0"&gt;
                      &lt;div class="mb-4"&gt;
                      &lt;div class="mb-8"&gt;
                      &lt;div class="mb-16"&gt;
                      &lt;div class="mb-24"&gt;
                      &lt;div class="mb-32"&gt;
                      &lt;div class="mb-40"&gt;
                      &lt;div class="mb-64"&gt;
                      &lt;div class="mb-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin start(left) -->
                      &lt;div class="ms-0"&gt;
                      &lt;div class="ms-4"&gt;
                      &lt;div class="ms-8"&gt;
                      &lt;div class="ms-16"&gt;
                      &lt;div class="ms-24"&gt;
                      &lt;div class="ms-32"&gt;
                      &lt;div class="ms-40"&gt;
                      &lt;div class="ms-64"&gt;
                      &lt;div class="ms-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin x axis(left & right) -->
                      &lt;div class="mx-0"&gt;
                      &lt;div class="mx-4"&gt;
                      &lt;div class="mx-8"&gt;
                      &lt;div class="mx-16"&gt;
                      &lt;div class="mx-24"&gt;
                      &lt;div class="mx-32"&gt;
                      &lt;div class="mx-40"&gt;
                      &lt;div class="mx-64"&gt;
                      &lt;div class="mx-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin y axis(top & bottom) -->
                      &lt;div class="my-0"&gt;
                      &lt;div class="my-4"&gt;
                      &lt;div class="my-8"&gt;
                      &lt;div class="my-16"&gt;
                      &lt;div class="my-24"&gt;
                      &lt;div class="my-32"&gt;
                      &lt;div class="my-40"&gt;
                      &lt;div class="my-64"&gt;
                      &lt;div class="my-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- margin all sides -->
                      &lt;div class="m-0"&gt;
                      &lt;div class="m-4"&gt;
                      &lt;div class="m-8"&gt;
                      &lt;div class="m-16"&gt;
                      &lt;div class="m-24"&gt;
                      &lt;div class="m-32"&gt;
                      &lt;div class="m-40"&gt;
                      &lt;div class="m-64"&gt;
                      &lt;div class="m-128"&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#marginCSS">
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
            <div class="modal fade" id="marginCSS" tabindex="-1" aria-labelledby="marginCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="marginCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                      .m {

                        // all
                        &-0 {
                          margin: 0px !important;
                        }

                        &-4 {
                          margin: 4px !important;
                        }

                        &-8 {
                          margin: 8px !important;
                        }

                        &-16 {
                          margin: 16px !important;
                        }

                        &-24 {
                          margin: 24px !important;
                        }

                        &-32 {
                          margin: 32px !important;
                        }

                        &-40 {
                          margin: 40px !important;
                        }

                        &-64 {
                          margin: 64px !important;
                        }

                        &-128 {
                          margin: 128px !important;
                        }

                        &s {

                          // left
                          &-0 {
                            margin-left: 0px !important;
                          }

                          &-4 {
                            margin-left: 4px !important;
                          }

                          &-8 {
                            margin-left: 8px !important;
                          }

                          &-16 {
                            margin-left: 16px !important;
                          }

                          &-24 {
                            margin-left: 24px !important;
                          }

                          &-32 {
                            margin-right: 32px !important;
                          }

                          &-40 {
                            margin-right: 40px !important;
                          }

                          &-64 {
                            margin-right: 64px !important;
                          }

                          &-128 {
                            margin-right: 128px !important;
                          }
                        }

                        &e {

                          // right
                          &-0 {
                            margin-right: 0px !important;
                          }

                          &-4 {
                            margin-right: 4px !important;
                          }

                          &-8 {
                            margin-right: 8px !important;
                          }

                          &-16 {
                            margin-right: 16px !important;
                          }

                          &-24 {
                            margin-right: 24px !important;
                          }

                          &-32 {
                            margin-right: 32px !important;
                          }

                          &-40 {
                            margin-right: 40px !important;
                          }

                          &-64 {
                            margin-right: 64px !important;
                          }

                          &-128 {
                            margin-right: 128px !important;
                          }
                        }

                        &t {

                          // top
                          &-0 {
                            margin-top: 0px !important;
                          }

                          &-4 {
                            margin-top: 4px !important;
                          }

                          &-8 {
                            margin-top: 8px !important;
                          }

                          &-16 {
                            margin-top: 16px !important;
                          }

                          &-24 {
                            margin-top: 24px !important;
                          }

                          &-32 {
                            margin-top: 32px !important;
                          }

                          &-40 {
                            margin-top: 40px !important;
                          }

                          &-64 {
                            margin-top: 64px !important;
                          }

                          &-128 {
                            margin-top: 128px !important;
                          }
                        }

                        &b {

                          // bottom
                          &-0 {
                            margin-bottom: 0px !important;
                          }

                          &-4 {
                            margin-bottom: 4px !important;
                          }

                          &-8 {
                            margin-bottom: 8px !important;
                          }

                          &-16 {
                            margin-bottom: 16px !important;
                          }

                          &-24 {
                            margin-bottom: 24px !important;
                          }

                          &-32 {
                            margin-bottom: 32px !important;
                          }

                          &-40 {
                            margin-bottom: 40px !important;
                          }

                          &-64 {
                            margin-bottom: 64px !important;
                          }

                          &-128 {
                            margin-bottom: 128px !important;
                          }
                        }

                        &x {

                          // x axis
                          &-0 {
                            margin-left: 0px !important;
                            margin-right: 0px !important;
                          }

                          &-4 {
                            margin-left: 4px !important;
                            margin-right: 4px !important;
                          }

                          &-8 {
                            margin-left: 8px !important;
                            margin-right: 8px !important;
                          }

                          &-16 {
                            margin-left: 16px !important;
                            margin-right: 16px !important;
                          }

                          &-24 {
                            margin-left: 24px !important;
                            margin-right: 24px !important;
                          }

                          &-32 {
                            margin-left: 32px !important;
                            margin-right: 32px !important;
                          }

                          &-40 {
                            margin-left: 40px !important;
                            margin-right: 40px !important;
                          }

                          &-64 {
                            margin-left: 64px !important;
                            margin-right: 64px !important;
                          }

                          &-128 {
                            margin-left: 128px !important;
                            margin-right: 128px !important;
                          }
                        }

                        &y {

                          // y axis
                          &-0 {
                            margin-top: 0px !important;
                            margin-bottom: 0px !important;
                          }

                          &-4 {
                            margin-top: 4px !important;
                            margin-bottom: 4px !important;
                          }

                          &-8 {
                            margin-top: 8px !important;
                            margin-bottom: 8px !important;
                          }

                          &-16 {
                            margin-top: 16px !important;
                            margin-bottom: 16px !important;
                          }

                          &-24 {
                            margin-top: 24px !important;
                            margin-bottom: 24px !important;
                          }

                          &-32 {
                            margin-top: 32px !important;
                            margin-bottom: 32px !important;
                          }

                          &-40 {
                            margin-top: 40px !important;
                            margin-bottom: 40px !important;
                          }

                          &-64 {
                            margin-top: 64px !important;
                            margin-bottom: 64px !important;
                          }

                          &-128 {
                            margin-top: 128px !important;
                            margin-bottom: 128px !important;
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
          <div class="item mb-64">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">single sides</div></div>
              <div class="bg-stripes margin pt-16"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300 borderAll-mono">mt-16</p></div>
              <div class="bg-stripes margin pe-16"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300 borderAll-mono">me-16</p></div>
              <div class="bg-stripes margin pb-16"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300 borderAll-mono">mb-16</p></div>
              <div class="bg-stripes margin ps-16"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300 borderAll-mono">ms-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.mt-16</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.ms-16</span>
            </div>
          </div>
          <div class="item mb-64">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">x/y axis</div></div>
              <div class="bg-stripes margin px-16"><p class="uiFnt size-12 wgt-400 mono-700 px-64 py-16 bgMono-300 borderAll-mono">mx-16</p></div>
              <div class="bg-stripes margin py-16"><p class="uiFnt size-12 wgt-400 mono-700 px-64 py-16 bgMono-300 borderAll-mono">my-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.mx-16</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.my-16</span>
            </div>
          </div>
          <div class="item">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">all sides</div></div>
              <div class="bg-stripes margin p-16"><p class="uiFnt size-12 wgt-400 mono-700 px-128 py-16 bgMono-300 borderAll-mono">m-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.m-16</span>
            </div>
          </div>
        </div>
      </div>
      <div id="padding">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Paddings</h4>
          <div class="d-flex align-items-center">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#paddingMarkup">
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
            <div class="modal fade" id="paddingMarkup" tabindex="-1" aria-labelledby="paddingMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="paddingMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <pre class="brush:html ; toolbar:false">
                      <!-- padding top -->
                      &lt;div class="pt-0"&gt;
                      &lt;div class="pt-4"&gt;
                      &lt;div class="pt-8"&gt;
                      &lt;div class="pt-16"&gt;
                      &lt;div class="pt-24"&gt;
                      &lt;div class="pt-32"&gt;
                      &lt;div class="pt-40"&gt;
                      &lt;div class="pt-64"&gt;
                      &lt;div class="pt-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding end(right) -->
                      &lt;div class="pe-0"&gt;
                      &lt;div class="pe-4"&gt;
                      &lt;div class="pe-8"&gt;
                      &lt;div class="pe-16"&gt;
                      &lt;div class="pe-24"&gt;
                      &lt;div class="pe-32"&gt;
                      &lt;div class="pe-40"&gt;
                      &lt;div class="pe-64"&gt;
                      &lt;div class="pe-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding bottom -->
                      &lt;div class="pb-0"&gt;
                      &lt;div class="pb-4"&gt;
                      &lt;div class="pb-8"&gt;
                      &lt;div class="pb-16"&gt;
                      &lt;div class="pb-24"&gt;
                      &lt;div class="pb-32"&gt;
                      &lt;div class="pb-40"&gt;
                      &lt;div class="pb-64"&gt;
                      &lt;div class="pb-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding start(left) -->
                      &lt;div class="ps-0"&gt;
                      &lt;div class="ps-4"&gt;
                      &lt;div class="ps-8"&gt;
                      &lt;div class="ps-16"&gt;
                      &lt;div class="ps-24"&gt;
                      &lt;div class="ps-32"&gt;
                      &lt;div class="ps-40"&gt;
                      &lt;div class="ps-64"&gt;
                      &lt;div class="ps-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding x axis(left & right) -->
                      &lt;div class="px-0"&gt;
                      &lt;div class="px-4"&gt;
                      &lt;div class="px-8"&gt;
                      &lt;div class="px-16"&gt;
                      &lt;div class="px-24"&gt;
                      &lt;div class="px-32"&gt;
                      &lt;div class="px-40"&gt;
                      &lt;div class="px-64"&gt;
                      &lt;div class="px-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding y axis(top & bottom) -->
                      &lt;div class="py-0"&gt;
                      &lt;div class="py-4"&gt;
                      &lt;div class="py-8"&gt;
                      &lt;div class="py-16"&gt;
                      &lt;div class="py-24"&gt;
                      &lt;div class="py-32"&gt;
                      &lt;div class="py-40"&gt;
                      &lt;div class="py-64"&gt;
                      &lt;div class="py-128"&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- padding all sides -->
                      &lt;div class="p-0"&gt;
                      &lt;div class="p-4"&gt;
                      &lt;div class="p-8"&gt;
                      &lt;div class="p-16"&gt;
                      &lt;div class="p-24"&gt;
                      &lt;div class="p-32"&gt;
                      &lt;div class="p-40"&gt;
                      &lt;div class="p-64"&gt;
                      &lt;div class="p-128"&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#paddingCSS">
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
            <div class="modal fade" id="paddingCSS" tabindex="-1" aria-labelledby="paddingCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="paddingCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    
                    .p {

                      // padding all
                      &-0 {
                        padding: 0px !important;
                      }

                      &-4 {
                        padding: 4px !important;
                      }

                      &-8 {
                        padding: 8px !important;
                      }

                      &-16 {
                        padding: 16px !important;
                      }

                      &-24 {
                        padding: 24px !important;
                      }

                      &-32 {
                        padding: 32px !important;
                      }

                      &-40 {
                        padding: 40px !important;
                      }

                      &-64 {
                        padding: 64px !important;
                      }

                      &-128 {
                        padding: 128px !important;
                      }

                      &s {

                        // left
                        &-0 {
                          padding-left: 0px !important;
                        }

                        &-4 {
                          padding-left: 4px !important;
                        }

                        &-8 {
                          padding-left: 8px !important;
                        }

                        &-16 {
                          padding-left: 16px !important;
                        }

                        &-24 {
                          padding-left: 24px !important;
                        }

                        &-32 {
                          padding-left: 32px !important;
                        }

                        &-40 {
                          padding-left: 40px !important;
                        }

                        &-64 {
                          padding-left: 64px !important;
                        }

                        &-128 {
                          padding-left: 128px !important;
                        }
                      }

                      &e {

                        // right
                        &-0 {
                          padding-right: 0px !important;
                        }

                        &-4 {
                          padding-right: 4px !important;
                        }

                        &-8 {
                          padding-right: 8px !important;
                        }

                        &-16 {
                          padding-right: 16px !important;
                        }

                        &-24 {
                          padding-right: 24px !important;
                        }

                        &-32 {
                          padding-right: 32px !important;
                        }

                        &-40 {
                          padding-right: 40px !important;
                        }

                        &-64 {
                          padding-right: 64px !important;
                        }

                        &-128 {
                          padding-right: 128px !important;
                        }
                      }

                      &t {

                        // top
                        &-0 {
                          padding-top: 0px !important;
                        }

                        &-4 {
                          padding-top: 4px !important;
                        }

                        &-8 {
                          padding-top: 8px !important;
                        }

                        &-16 {
                          padding-top: 16px !important;
                        }

                        &-24 {
                          padding-top: 24px !important;
                        }

                        &-32 {
                          padding-top: 32px !important;
                        }

                        &-40 {
                          padding-top: 40px !important;
                        }

                        &-64 {
                          padding-top: 64px !important;
                        }

                        &-128 {
                          padding-top: 128px !important;
                        }
                      }

                      &b {

                        // bottom
                        &-0 {
                          padding-bottom: 0px !important;
                        }

                        &-4 {
                          padding-bottom: 4px !important;
                        }

                        &-8 {
                          padding-bottom: 8px !important;
                        }

                        &-16 {
                          padding-bottom: 16px !important;
                        }

                        &-24 {
                          padding-bottom: 24px !important;
                        }

                        &-32 {
                          padding-bottom: 32px !important;
                        }

                        &-40 {
                          padding-bottom: 40px !important;
                        }

                        &-64 {
                          padding-bottom: 64px !important;
                        }

                        &-128 {
                          padding-bottom: 128px !important;
                        }
                      }

                      &x {

                        // x axis
                        &-0 {
                          padding-left: 0px !important;
                          padding-right: 0px !important;
                        }

                        &-4 {
                          padding-left: 4px !important;
                          padding-right: 4px !important;
                        }

                        &-8 {
                          padding-left: 8px !important;
                          padding-right: 8px !important;
                        }

                        &-16 {
                          padding-left: 16px !important;
                          padding-right: 16px !important;
                        }

                        &-24 {
                          padding-left: 24px !important;
                          padding-right: 24px !important;
                        }

                        &-32 {
                          padding-left: 32px !important;
                          padding-right: 32px !important;
                        }

                        &-40 {
                          padding-left: 40px !important;
                          padding-right: 40px !important;
                        }

                        &-64 {
                          padding-left: 64px !important;
                          padding-right: 64px !important;
                        }

                        &-128 {
                          padding-left: 128px !important;
                          padding-right: 128px !important;
                        }
                      }

                      &y {

                        // y axis
                        &-0 {
                          padding-top: 0px !important;
                          padding-right: 0px !important;
                        }

                        &-4 {
                          padding-top: 4px !important;
                          padding-right: 4px !important;
                        }

                        &-8 {
                          padding-top: 8px !important;
                          padding-bottom: 8px !important;
                        }

                        &-16 {
                          padding-top: 16px !important;
                          padding-bottom: 16px !important;
                        }

                        &-24 {
                          padding-top: 24px !important;
                          padding-bottom: 24px !important;
                        }

                        &-32 {
                          padding-top: 32px !important;
                          padding-bottom: 32px !important;
                        }

                        &-40 {
                          padding-top: 40px !important;
                          padding-bottom: 40px !important;
                        }

                        &-64 {
                          padding-top: 64px !important;
                          padding-bottom: 64px !important;
                        }

                        &-128 {
                          padding-top: 128px !important;
                          padding-bottom: 128px !important;
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
          <div class="item mb-64">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">single sides</div></div>
              <div class="bg-stripes padding pt-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300">pt-16</p></div>
              <div class="bg-stripes padding pe-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300">pe-16</p></div>
              <div class="bg-stripes padding pb-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300">pb-16</p></div>
              <div class="bg-stripes padding ps-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 p-16 bgMono-300">ps-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.pt-16</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.ps-16</span>
            </div>
          </div>
          <div class="item mb-64">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">x/y axis</div></div>
              <div class="bg-stripes padding px-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 px-64 py-16 bgMono-300">px-16</p></div>
              <div class="bg-stripes padding py-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 px-64 py-16 bgMono-300">py-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.px-16</span>
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.py-16</span>
            </div>
          </div>
          <div class="item">
            <div class="inner gap">
              <div class="fix-width-100"><div class="uiFnt size-11 wgt-500 smallTag">all sides</div></div>
              <div class="bg-stripes padding p-16 borderAll-mono"><p class="uiFnt size-12 wgt-400 mono-700 px-128 py-16 bgMono-300">p-16</p></div>
            </div>
            <div class="inner">
              <span class="uiFnt size-13 wgt-400 me-8 smallTag-code">.p-16</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="grey300">
    <div class="IconsContent py-64" id="item-7">
      <h2 class="uiFnt wgt-700 txt-32">Icons</h2>
      <p class="mt-32 mono-600">
        현재 크로스타겟에서 쓰이고 있는 아이콘들을 확인할 수 있습니다. 페이지가 개선되고 쌓일때마다 보강이 될 예정에 있습니다.<br>
        Normal Size는 서체크기 <mark>size-15</mark>와 함께 페어링 할 수 있도록 설계되었으며<br>
        Small Size는 서체크기 <mark>size-13</mark>와 함께 페어링 할 수 있도록 설계되었습니다.<br><br>
        또한 서체와 페어링시, 시각보정을 위해 선두께를 1px, 1.5px, 2px로 교정할 수 있으며<br>
        아이콘에 마우스를 호버했을때 svg path정보를 확인하여 바로 복사해서 사용할 수 있습니다.
      </p>
      <div id="icons16">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Normal <span class="uiFnt wgt-400">(height 16px & pairing with 15px font)</span></h4>
          <div class="d-flex align-items-center d-none">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#checkBoxMarkup">
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
            <div class="modal fade" id="checkBoxMarkup" tabindex="-1" aria-labelledby="checkBoxMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal state -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId1"&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- checked disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" checked disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#checkBoxCSS">
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
            <div class="modal fade" id="checkBoxCSS" tabindex="-1" aria-labelledby="checkBoxCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    .checkBox {
                      display: flex;
                      align-items: center;

                      label {
                        line-height: 110% !important;
                      }

                      input[type="checkbox"].primary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border-color: $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%234A81EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $white;
                          border-color: $mono-grey500;

                          &:hover {
                            background-color: $white;
                            border-color: $mono-grey400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
                          }
                        }
                      }

                      input[type="checkbox"].secondary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border: 1px solid $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $color-blue300;
                          border-color: $color-blue300;

                          &:hover {
                            background-color: $color-blue400;
                            border-color: $color-blue400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;
                            border-color: $mono-grey500;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;
                          border-color: $mono-grey500;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
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
          <div class="group d-flex">
            <div class="iconItem 1">
              <!-- bell Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#bellMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/>
                  <path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- bell Trilgger -->
              <!-- bell Content -->
              <div class="modal fade" id="bellMarkup" tabindex="-1" aria-labelledby="bellMarkupLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="bellMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/>
                          <path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                          &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/>
                          <path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                          &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/>
                          <path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                          &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- bell Content -->
              <p class="uiFnt size-11">bell</p>
            </div>
            <div class="iconItem 2">
              <!-- arrow-extend Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#arrowExtendMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- arrow-extend Trilgger -->
              <!-- arrow-extend Content -->
              <div class="modal fade" id="arrowExtendMarkup" tabindex="-1" aria-labelledby="arrowExtendMarkupLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="arrowExtendMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 6V2H6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 6V2H6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- arrow-extend Content -->
              <p class="uiFnt size-11">arrow-extend</p>
            </div>
            <div class="iconItem 3">
              <!-- arrow-reduction Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#arrowReductionMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- arrow-reduction Trilgger -->
              <!-- arrow-reduction Content -->
              <div class="modal fade" id="arrowReductionMarkup" tabindex="-1" aria-labelledby="arrowReductionMarkupLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="arrowReductionMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- arrow-reduction Content -->
              <p class="uiFnt size-11">arrow-reduction</p>
            </div>
            <div class="iconItem 4">
              <!-- logout Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#logoutMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </a>
              <!-- logout Trilgger -->
              <!-- logout Content -->
              <div class="modal fade" id="logoutMarkup" tabindex="-1" aria-labelledby="logoutMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="logoutMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                          <path d="M6 8L14 8" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                          <path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                        &lt;p class="uiFnt size-15 wgt-400"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                            &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                            &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                          &lt;/svg&gt;
                          Cross Target
                        &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                          <path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                          <path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                        &lt;p class="uiFnt size-15 wgt-500"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                            &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                            &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                          &lt;/svg&gt;
                          Cross Target
                        &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                          <path d="M6 8L14 8" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                          <path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                        &lt;p class="uiFnt size-15 wgt-600"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                            &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                            &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                          &lt;/svg&gt;
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
              <!-- logout Content -->
              <p class="uiFnt size-11">logout</p>
            </div>
            <div class="iconItem 5">
              <!-- plus Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#plusMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </a>
              <!-- plus Trilgger -->
              <!-- plus Content -->
              <div class="modal fade" id="plusMarkup" tabindex="-1" aria-labelledby="plusMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="plusMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                          <path d="M8 2L8 14" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                      &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                        &lt;path d="M2 8H14" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                        &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                      &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                          <path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                      &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                        &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                        &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                      &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg class="me-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                          <path d="M8 2L8 14" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                      &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                        &lt;path d="M2 8H14" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                        &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                      &lt;/svg&gt;
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
              <!-- plus Content -->
              <p class="uiFnt size-11">plus</p>
            </div>
            <div class="iconItem 6">
              <!-- minus Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#minusMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </a>
              <!-- minus Trilgger -->
              <!-- minus Content -->
              <div class="modal fade" id="minusMarkup" tabindex="-1" aria-labelledby="minusMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="minusMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 8H14" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 8H14" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M2 8H14" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- minus Content -->
              <p class="uiFnt size-11">minus</p>
            </div>
            <div class="iconItem 7">
              <!-- search Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#searchMarkup">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- search Trilgger -->
              <!-- search Content -->
              <div class="modal fade" id="searchMarkup" tabindex="-1" aria-labelledby="searchMarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="searchMarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-15 wgt-400 mt-16">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-500 mt-32">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-500"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-15 wgt-600 mt-32">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-600"&gt;
                        &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- search Content -->
              <p class="uiFnt size-11">search</p>
            </div>
            <div class="iconItem 8">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
            <div class="iconItem 9">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
            <div class="iconItem 10">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
          </div>
        </div>
      </div>
      <div id="icons12">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Small <span class="uiFnt wgt-400">(height 12px & pairing with 13px font)</span></h4>
          <div class="d-flex align-items-center d-none">
            <!-- markup Trilgger -->
            <a class="aLink uiFnt size-13 wgt-600 me-24" data-bs-toggle="modal" data-bs-target="#checkBoxMarkup">
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
            <div class="modal fade" id="checkBoxMarkup" tabindex="-1" aria-labelledby="checkBoxMarkupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxMarkupLabel">Markup Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:html ; toolbar:false">
                      <!-- normal state -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="primary me-8" type="checkbox" value="sampleValue" id="sampleId1"&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
                      &lt;/div&gt;
                    </pre>
                    <pre class="brush:html ; toolbar:false">
                      <!-- checked disabled -->
                      &lt;div class="checkBox"&gt;
                        &lt;input class="secondary me-8" type="checkbox" value="sampleValue" id="sampleId1" checked disabled&gt;
                        &lt;label class="uiFnt size-13" for="sampleId1"&gt;체크&lt;/label&gt;
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
            <a class="aLink uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#checkBoxCSS">
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
            <div class="modal fade" id="checkBoxCSS" tabindex="-1" aria-labelledby="checkBoxCSSLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title uiFnt wgt-700" id="checkBoxCSSLabel">SCSS Code</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <pre class="brush:sass ; toolbar:false">
                    .checkBox {
                      display: flex;
                      align-items: center;

                      label {
                        line-height: 110% !important;
                      }

                      input[type="checkbox"].primary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border-color: $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%234A81EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $white;
                          border-color: $mono-grey500;

                          &:hover {
                            background-color: $white;
                            border-color: $mono-grey400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
                          }
                        }
                      }

                      input[type="checkbox"].secondary {
                        -webkit-appearance: none;
                        position: relative;
                        width: 16px;
                        height: 16px;
                        cursor: pointer;
                        outline: none !important;
                        border: 1px solid $mono-grey500;
                        border-radius: 2px;
                        background-color: $white;
                        transition: all .1s ease-in-out;

                        &:hover {
                          border: 1px solid $mono-grey400;
                        }

                        &:checked {
                          content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                          background-color: $color-blue300;
                          border-color: $color-blue300;

                          &:hover {
                            background-color: $color-blue400;
                            border-color: $color-blue400;
                          }

                          &:disabled {
                            content: url('data:image/svg+xml,%3Csvg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2.91666 7.58333L5.25 9.91666L11.0833 4.08333" stroke="%23C1C1CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/%3E%3C/svg%3E%0A');
                            background-color: $mono-grey300;
                            border-color: $mono-grey500;

                            &:hover {
                              border-color: $mono-grey500;
                              cursor: not-allowed;
                            }
                          }
                        }

                        &:disabled {
                          background-color: $mono-grey300;
                          border-color: $mono-grey500;

                          &:hover {
                            border-color: $mono-grey500;
                            cursor: not-allowed;
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
          <div class="group d-flex">
            <div class="iconItem 1">
              <div class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="8" cy="8" r="7" stroke="#C1C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2.5 4"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">bell</p>
            </div>
            <div class="iconItem 2">
              <!-- arrow-extend Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#arrowExtend12Markup">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 4V1H4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- arrow-extend Trilgger -->
              <!-- arrow-extend Content -->
              <div class="modal fade" id="arrowExtend12Markup" tabindex="-1" aria-labelledby="arrowExtend12MarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="arrowExtend12MarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-13 wgt-400 mt-16">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 4V1H4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 4V1H4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-500 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 4V1H4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-500"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 4V1H4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-600 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 4V1H4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-600"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 4V1H4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- arrow-extend Content -->
              <p class="uiFnt size-11">arrow-extend</p>
            </div>
            <div class="iconItem 3">
              <!-- arrow-reduction Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#arrowReduction12Markup">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- arrow-reduction Trilgger -->
              <!-- arrow-reduction Content -->
              <div class="modal fade" id="arrowReduction12Markup" tabindex="-1" aria-labelledby="arrowReduction12MarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="arrowReduction12MarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-13 wgt-400 mt-16">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-500 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-500"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-600 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-600"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- arrow-reduction Content -->
              <p class="uiFnt size-11">arrow-reduction</p>
            </div>
            <div class="iconItem 4">
              <div class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="8" cy="8" r="7" stroke="#C1C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2.5 4"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">logout</p>
            </div>
            <div class="iconItem 5">
              <!-- plus Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#plus12Markup">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M6 1L6 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </a>
              <!-- plus Trilgger -->
              <!-- plus Content -->
              <div class="modal fade" id="plus12Markup" tabindex="-1" aria-labelledby="plus12MarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="plus12MarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-13 wgt-400 mt-16">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                          <path d="M6 1L6 11" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                          &lt;path d="M6 1L6 11" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-500 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                          <path d="M6 1L6 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-500"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                          &lt;path d="M6 1L6 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-600 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                          <path d="M6 1L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-600"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                          &lt;path d="M6 1L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- plus Content -->
              <p class="uiFnt size-11">plus</p>
            </div>
            <div class="iconItem 6">
              <!-- minus Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#minus12Markup">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </a>
              <!-- minus Trilgger -->
              <!-- minus Content -->
              <div class="modal fade" id="minus12Markup" tabindex="-1" aria-labelledby="minus12MarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="minus12MarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-13 wgt-400 mt-16">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="1" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;/svg&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-500 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-500"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;/svg&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-600 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H11" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-600"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;/svg&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="2" stroke-linecap="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- minus Content -->
              <p class="uiFnt size-11">minus</p>
            </div>
            <div class="iconItem 7">
              <!-- search Trilgger -->
              <a class="icon true uiFnt size-13 wgt-600" data-bs-toggle="modal" data-bs-target="#search12Markup">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <!-- search Trilgger -->
              <!-- search Content -->
              <div class="modal fade" id="search12Markup" tabindex="-1" aria-labelledby="search12MarkupLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title uiFnt wgt-700" id="search12MarkupLabel">Markup Code</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="uiFnt size-13 wgt-600 mt-16">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-500 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-500"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
                        Cross Target
                      &lt;/p&gt;
                      </pre>
                      <p class="uiFnt size-13 wgt-600 mt-32">
                        <svg class="me-4" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        테스트
                      </p>
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-13 wgt-600"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/&gt;
                        &lt;/svg&gt;
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
              <!-- search Content -->
              <p class="uiFnt size-11">search</p>
            </div>
            <div class="iconItem 8">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
            <div class="iconItem 9">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
            <div class="iconItem 10">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="10" cy="10" r="1" fill="#C1C1CC"/>
                  <circle cx="14" cy="10" r="1" fill="#C1C1CC"/>
                </svg>
              </div>
              <p class="uiFnt size-11 mono-500">empty</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer links start -->
  <?php
    include '../include/footer.php';
  ?>
  <!-- footer links end -->
  <!-- 휴지통 -->
  <!-- 아코디언 <div class="accordion accordion-flush" id="typographyMarkup">
    <div class="accordion-item">
      <h2 class="accordion-header" id="typo-markup">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#markup-collapseOne" aria-expanded="false" aria-controls="markup-collapseOne">
          <h4 class="uiFnt size-15 wgt-700">Markup Code</h4>
        </button>
      </h2>
      <div id="markup-collapseOne" class="accordion-collapse collapse" aria-labelledby="typo-markup" data-bs-parent="#typographyMarkup">
        <div class="accordion-body">
          <div id="typocss">
            <pre class="brush:html ; toolbar:false">
                &lt;p class="uiFnt size-11 wgt-300"&gt;
                  Cross Target
                &lt;/p&gt;
              </pre>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion accordion-flush" id="typographyMarkup">
    <div class="accordion-item">
      <h2 class="accordion-header" id="typo-CSS">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CSS-collapseOne" aria-expanded="false" aria-controls="CSS-collapseOne">
          <h4 class="uiFnt size-15 wgt-700">CSS Code</h4>
        </button>
      </h2>
      <div id="CSS-collapseOne" class="accordion-collapse collapse" aria-labelledby="typo-CSS" data-bs-parent="#typographyCSS">
        <div class="accordion-body">
          <div id="typocss">
            <pre class="brush:sass ; toolbar:false">
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
        </div>
      </div>
    </div>
  </div> -->
</body>

</html>