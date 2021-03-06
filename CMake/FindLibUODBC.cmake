if (LIBODBC_LIBRARIES AND LIBODBC_INCLUDE_DIRS)
  set (LibUODBC_FIND_QUIETLY TRUE)
endif (LIBODBC_LIBRARIES AND LIBODBC_INCLUDE_DIRS)

find_path (LIBODBC_INCLUDE_DIRS NAMES sqlext.h)
find_library (LIBODBC_LIBRARIES NAMES odbc)
include (FindPackageHandleStandardArgs)
FIND_PACKAGE_HANDLE_STANDARD_ARGS(LibUODBC DEFAULT_MSG
    LIBODBC_LIBRARIES
    LIBODBC_INCLUDE_DIRS)

mark_as_advanced(LIBODBC_INCLUDE_DIRS LIBODBC_LIBRARIES)
