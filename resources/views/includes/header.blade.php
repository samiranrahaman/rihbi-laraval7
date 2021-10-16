<div class="container-fluid">
      <ul class="header_mobile">
        <li class="mobile_nav">
         <img src="images/logo.svg">
        </li>
        <li class="mobile_nav">
          <ul class="inner_nav">
            <li>
              <img class="form-control-feedback" src="{{asset('images/Search.svg')}}">
            </li>
            <li> 
              <div class="menu-toggle"><img src="{{asset('images/menu.svg')}}"></div>
            </li>
          </ul>
        </li>
      </ul>

      <ul class="header_ul">
        <a href="./index.html#"><li class="mobile_none"><img src="{{asset('images/logo.svg')}}"></li></a>
        <li>
          <div class="table_center table_location">
             <div class="drop-down">
               <div id="dropDown" class="drop-down__button drop-down__button_jq">
                 <span class="drop-down__name"><img class="location" src="{{asset('images/Location.svg')}}">Malakpet, Hyderabad </span>
               </div>
               
               <!-- <div class="drop-down__menu-box">
                 <ul class="drop-down__menu">
                   <li data-name="profile" class="drop-down__item">Your Profile</li>
                   <li data-name="dashboard" class="drop-down__item">Your Dashboard</li>
                   <li data-name="activity" class="drop-down__item">Recent activity</li>
                 </ul>
               </div> -->
             </div>
          </div>
        </li>
        <li class="mobile_none">
          <div class="form-group has-search">
            <img class="form-control-feedback" src="{{asset('images/Search.svg')}}">
            <input type="text" class="form-control" placeholder="Search with name or seller">
          </div>
        </li>
        <li>
          <a class="filter_icon" href="#"><img src="{{asset('images/Filter.svg')}}"></a>
        </li>
        <li>
          <div class="table_center table_user">
             <div class="drop-down">
               <div id="dropDown" class="down__button_s drop-down__button_jq">
                 <span class="drop-down__name sell_btn"><img src="{{asset('images/akra-icon.svg')}}">Sell</span>
               </div>
               
               <div class="drop-down__menu-box">
                 <ul class="drop-down__menu">
                   <li data-name="seller registration" class="drop-down__item"><a href="#">Seller Registration</a></li>
                   <li data-name="dashboard" class="drop-down__item"><a href="#">View Profile</a></li>
                   <li data-name="activity" class="drop-down__item"><a href="#">Add Product</a></li>
                </ul>
               </div>
             </div>
          </div>
        </li>
        <!-- <li>
          <a href="#" class="sell_btn"><img src="images/akra-icon.svg">Sell</a>
        </li>
        <li> -->
          <div class="cart_notification">
            <!--<a href="#" class="cart_i"><img src="images/placeholder.png"></a>-->
            <a href="#" class="cart_i"><img src="{{asset('images/cart.svg')}}"><span class="buds">9+</span></a>

              <div class="table_center table_notification">
                 <div class="drop-down">
                   <div id="dropDown" class="drop-down__button_jq">
                     <a href="#" class="notification_i"><img src="{{asset('images/Notification.svg')}}"><span class="buds">9+</span></a>
                   </div>
                   
                   <div class="drop-down__menu-box">
                    <div class="noti_title">Notifications</div>
                     <ul class="noti_ul">
                       <li>
                          <div class="discount_div"><img src="{{asset('images/Discount1.png')}}"></div>
                          <div class="discount_info">
                             <h4>Lorem ipsum dolor</h4>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra egestas eget </p>
                             <div class="date_noti">06-June-2021</div>
                          </div>
                       </li>
                       <li>
                         <div class="discount_div"><img src="{{asset('images/Discount1.png')}}"></div>
                          <div class="discount_info">
                             <h4>Lorem ipsum dolor</h4>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra egestas eget </p>
                             <div class="date_noti">06-June-2021</div>
                          </div>
                       </li>
                     </ul>
                   </div>
                 </div>
              </div>
          </div>
        </li>
        <li>
          <div class="table_center table_user">
             <div class="drop-down">
               <div id="dropDown" class="down__button_s drop-down__button_jq">
                 <span class="drop-down__name"><img src="{{asset('images/user-img.svg')}}"></span>
               </div>
               
               <div class="drop-down__menu-box">
                 <ul class="drop-down__menu">
                   <li data-name="profile" class="drop-down__item"><a href="./buyer-profile-order.html"><img class="icon_i" src="{{asset('images/user-img.svg')}}"> Profile</a></li>
                   <li data-name="dashboard" class="drop-down__item"><a href="./buyer-profile-order.html"><img class="icon_i" src="{{asset('images/Send.svg')}}"> Share Now</a></li>
                   <li data-name="activity" class="drop-down__item"><a href="#"><img class="icon_i" src="{{asset('images/Logout.svg')}}"> Sign out</a></li>
                </ul>
               </div>
             </div>
          </div>
        </li>
        
      </ul>

    </div>