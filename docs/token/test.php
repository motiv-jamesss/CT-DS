<!DOCTYPE html>
<html lang="en">
  <!-- test -->
  <!-- header include start -->
  <?php
    include '../include/header.php';
  ?>
  <!-- header include end -->
    <div class="docsMainContent" data-bs-target="#docContents">
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
      <p class="uiFnt size-15 wgt-500 mt-32">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/>
          <path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        테스트
      </p>
      <p class="uiFnt size-13 wgt-500 mt-32">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 4V1H4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        테스트
      </p>
      <div class="accordion" id="icons16">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Normal <span class="uiFnt wgt-400">(height 16px & pairing with 15px font)</span></h4>
          <div class="accordion-item d-flex align-items-center">
            <h5 class="accordion-header" id="heading1px" data-bs-toggle="collapse" data-bs-target="#collapse1px" aria-expanded="true" aria-controls="collapse1px">
              Line 1px
            </h5>
            <h5 class="accordion-header" id="heading1Dot5px" data-bs-toggle="collapse" data-bs-target="#collapse1Dot5px" aria-expanded="false" aria-controls="collapse1Dot5px">
              Line 1.5px
            </h5>
            <h5 class="accordion-header" id="heading2px" data-bs-toggle="collapse" data-bs-target="#collapse2px" aria-expanded="false" aria-controls="collapse2px">
              Line 2px
            </h5>
          </div>
        </div>
        <div id="collapse1px" class="accordion-collapse collapse show" aria-labelledby="heading1px" data-bs-parent="#icons16">
            <div class="accordion-body exam-boxes">
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
                  <div class="modal fade" id="bellMarkup" tabindex="-1" aria-labelledby="bellMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="bellMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                              &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowExtendMarkup" tabindex="-1" aria-labelledby="arrowExtendMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowExtendMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowReductionMarkup" tabindex="-1" aria-labelledby="arrowReductionMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowReductionMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                            &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
        <div id="collapse1Dot5px" class="accordion-collapse collapse" aria-labelledby="heading1Dot5px" data-bs-parent="#icons16">
          <div class="accordion-body">
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
                  <div class="modal fade" id="bellMarkup" tabindex="-1" aria-labelledby="bellMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="bellMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                              &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowExtendMarkup" tabindex="-1" aria-labelledby="arrowExtendMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowExtendMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowReductionMarkup" tabindex="-1" aria-labelledby="arrowReductionMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowReductionMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                            &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
        <div id="collapse2px" class="accordion-collapse collapse" aria-labelledby="heading2px" data-bs-parent="#icons16">
          <div class="accordion-body">
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
                  <div class="modal fade" id="bellMarkup" tabindex="-1" aria-labelledby="bellMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="bellMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M8 16C9.10457 16 10 15.1046 10 14H6C6 15.1046 6.89543 16 8 16Z" fill="#333333"/&gt;
                              &lt;path d="M8.00011 2.00703C3.5 2.00703 3.03113 6.73056 3.03113 9.47891V10.5923C3.03113 10.9541 2.89118 11.301 2.64208 11.5568L2.05681 12.1578C1.92331 12.2949 2.04004 12.5 2.25153 12.5H13.7485C13.96 12.5 14.0767 12.2949 13.9432 12.1578L13.3579 11.5568C13.1088 11.301 12.9689 10.9541 12.9689 10.5923V9.47891C12.9689 6.73057 12.5002 2.00703 8.00011 2.00703ZM8.00011 2.00703V1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowExtendMarkup" tabindex="-1" aria-labelledby="arrowExtendMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowExtendMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 6V2H6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M14 10L14 14L10 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 2L14 2L14 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 14L2 14L2 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                  <div class="modal fade" id="arrowReductionMarkup" tabindex="-1" aria-labelledby="arrowReductionMarkupLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title uiFnt wgt-700" id="arrowReductionMarkupLabel">Markup Code</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M15 6L10 6L10 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M1 10L6 10L6 15" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M6 1L6 6L0.999998 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                              &lt;path d="M10 15L10 10L15 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M9 5V4C9 2.89543 8.10457 2 7 2H4C2.89543 2 2 2.89543 2 4V12C2 13.1046 2.89543 14 4 14H7C8.10457 14 9 13.1046 9 12V11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M6 8L14 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                              &lt;path d="M12 5L14.6464 7.64645C14.8417 7.84171 14.8417 8.15829 14.6464 8.35355L12 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                          &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                            &lt;path d="M8 2L8 14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M2 8H14" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                          <pre class="brush:html ; toolbar:false">
                          &lt;p class="uiFnt size-15 wgt-400"&gt;
                            &lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M14 14L10 10M11.3333 6.66667C11.3333 9.244 9.244 11.3333 6.66667 11.3333C4.08934 11.3333 2 9.244 2 6.66667C2 4.08934 4.08934 2 6.66667 2C9.244 2 11.3333 4.08934 11.3333 6.66667Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
      <div id="icons12">
        <div class="category mt-40 mb-16">
          <h4 class="uiFnt wgt-700">Small <span class="uiFnt wgt-400">(height 12px & pairing with 13px font)</span></h4>
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
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 4V1H4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M11 8L11 11L8 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 1L11 1L11 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 11L1 11L1 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 4L8 4L8 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M1 8L4 8L4 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M4 1L4 4L1 4" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
                          &lt;path d="M8 11L8 8L11 8" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
                          &lt;path d="M6 1L6 11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;/svg&gt;
                          &lt;path d="M1 6H11" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/&gt;
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
                      <pre class="brush:html ; toolbar:false">
                      &lt;p class="uiFnt size-15 wgt-400"&gt;
                        &lt;svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                          &lt;path d="M11 11L7.66667 7.66667M8.77778 4.88889C8.77778 7.03666 7.03666 8.77778 4.88889 8.77778C2.74111 8.77778 1 7.03666 1 4.88889C1 2.74111 2.74111 1 4.88889 1C7.03666 1 8.77778 2.74111 8.77778 4.88889Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
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