@extends('admin.layouts.app')
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
    <div class="col">
      <div class="card radius-10 border-0 border-start border-primary border-4">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Total Orders</p>
              <h4 class="mb-0 text-primary">248</h4>
            </div>
            <div class="ms-auto widget-icon bg-primary text-white">
              <i class="bi bi-basket2-fill"></i>
            </div>
          </div>
          <div class="progress mt-3" style="height: 4.5px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 border-0 border-start border-success border-4">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Total Revenue</p>
              <h4 class="mb-0 text-success">$1,245</h4>
            </div>
            <div class="ms-auto widget-icon bg-success text-white">
              <i class="bi bi-currency-dollar"></i>
            </div>
          </div>
          <div class="progress mt-3" style="height: 4.5px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 border-0 border-start border-danger border-4">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Bounce Rate</p>
              <h4 class="mb-0 text-danger">24.25%</h4>
            </div>
            <div class="ms-auto widget-icon bg-danger text-white">
              <i class="bi bi-graph-down-arrow"></i>
            </div>
          </div>
          <div class="progress mt-3" style="height: 4.5px;">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 border-0 border-start border-warning border-4">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">New Users</p>
              <h4 class="mb-0 text-warning">214</h4>
            </div>
            <div class="ms-auto widget-icon bg-warning text-dark">
              <i class="bi bi-people-fill"></i>
            </div>
          </div>
          <div class="progress mt-3" style="height: 4.5px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
     </div>
  </div><!--end row-->

  
 


   <div class="card">
    <div class="card-body">
      <div class="customer-table">
        <div class="table-responsive white-space-nowrap">
           <table class="table align-middle">
            <thead class="table-light">
              <tr>
                <th>
                  <input class="form-check-input" type="checkbox">
                </th>
                <th>Order Id</th>
                <th>Price</th>
                <th>Customer</th>
                <th>Payment Status</th>
                <th>Completed Payment</th>
                <th>Delivery Type</th>
                <th>Date</th>
              </tr>
             </thead>
             <tbody>
               <tr>
                 <td>
                   <input class="form-check-input" type="checkbox">
                 </td>
                 <td>
                  <a href="javascript:;">#2415</a>
                 </td>
                 <td>$98</td>
                 <td>
                  <a class="d-flex align-items-center gap-3" href="javascript:;">
                    <div class="customer-pic">
                      <img src="assets/images/avatars/01.png" class="rounded-circle" width="40" height="40" alt="">
                    </div>
                    <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                  </a>
                 </td>
                 <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                 <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                 <td>Cash on delivery</td>
                 <td>Nov 12, 10:45 PM</td>
               </tr>
               <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#7845</a>
                </td>
                <td>$110</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/02.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr>
              <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#5674</a>
                </td>
                <td>$86</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/03.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr>
              <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#6678</a>
                </td>
                <td>$78</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/04.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr>
              <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#2367</a>
                </td>
                <td>$69</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/05.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr>
              <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#9870</a>
                </td>
                <td>$49</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/06.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr>
              <tr>
                <td>
                  <input class="form-check-input" type="checkbox">
                </td>
                <td>
                 <a href="javascript:;">#3456</a>
                </td>
                <td>$65</td>
                <td>
                 <a class="d-flex align-items-center gap-3" href="javascript:;">
                   <div class="customer-pic">
                     <img src="assets/images/avatars/07.png" class="rounded-circle" width="40" height="40" alt="">
                   </div>
                   <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                 </a>
                </td>
                <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                <td>Cash on delivery</td>
                <td>Nov 12, 10:45 PM</td>
              </tr> 
             </tbody>
           </table>
        </div>
      </div>
    </div>
  </div>
@endsection